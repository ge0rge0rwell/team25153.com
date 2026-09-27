import { useEffect, useRef, useState } from 'react'
import {
  Play,
  Pause,
  Download,
  RotateCcw,
  RotateCw,
  Volume2,
  VolumeX,
} from 'lucide-react'
import PageBanner from '../components/ui/PageBanner'
import Reveal from '../components/motion/Reveal'

// 12 episodes are planned, each on a different FTC topic — append new
// entries here as audio files land.
const podcastEpisodes = [
  {
    number: 1,
    title: 'BioBuzz Podcast — EN',
    description:
      "Cartesian Robotics #25153 talks through the game, our strategy and what it's like building for FTC this year.",
    audioSrc: '/media/biobuzz-podcast-en.mp3',
  },
]

const SPEEDS = [1, 1.25, 1.5, 1.75, 2]
const SKIP_SECONDS = 15

function formatTime(seconds) {
  if (!Number.isFinite(seconds) || seconds < 0) return '0:00'
  const mins = Math.floor(seconds / 60)
  const secs = Math.floor(seconds % 60)
  return `${mins}:${secs.toString().padStart(2, '0')}`
}

// A self-contained podcast player modeled on the transport patterns shared
// by Apple Podcasts, Overcast and Spotify: a scrubbable progress rail with
// buffered-range feedback, ±15s jump buttons for skipping intros/silence,
// a cyclable speed control, and a volume slider that remembers mute state
// independently of the last volume level.
function Episode({ episode }) {
  const audioRef = useRef(null)
  const [isPlaying, setIsPlaying] = useState(false)
  const [currentTime, setCurrentTime] = useState(0)
  const [duration, setDuration] = useState(0)
  const [buffered, setBuffered] = useState(0)
  const [speed, setSpeed] = useState(1)
  const [volume, setVolume] = useState(1)
  const [isMuted, setIsMuted] = useState(false)
  const [isScrubbing, setIsScrubbing] = useState(false)

  useEffect(() => {
    const audio = audioRef.current
    if (!audio) return

    const onTimeUpdate = () => {
      if (!isScrubbing) setCurrentTime(audio.currentTime)
    }
    const onLoadedMetadata = () => setDuration(audio.duration || 0)
    const onProgress = () => {
      if (audio.buffered.length > 0) {
        setBuffered(audio.buffered.end(audio.buffered.length - 1))
      }
    }

    audio.addEventListener('timeupdate', onTimeUpdate)
    audio.addEventListener('loadedmetadata', onLoadedMetadata)
    audio.addEventListener('progress', onProgress)
    return () => {
      audio.removeEventListener('timeupdate', onTimeUpdate)
      audio.removeEventListener('loadedmetadata', onLoadedMetadata)
      audio.removeEventListener('progress', onProgress)
    }
  }, [isScrubbing])

  const togglePlayback = () => {
    const audio = audioRef.current
    if (!audio) return
    if (isPlaying) audio.pause()
    else audio.play()
  }

  const seekTo = (time) => {
    const audio = audioRef.current
    if (!audio || !duration) return
    const clamped = Math.min(Math.max(time, 0), duration)
    audio.currentTime = clamped
    setCurrentTime(clamped)
  }

  const skip = (delta) => seekTo(currentTime + delta)

  const cycleSpeed = () => {
    const audio = audioRef.current
    const nextIndex = (SPEEDS.indexOf(speed) + 1) % SPEEDS.length
    const next = SPEEDS[nextIndex]
    setSpeed(next)
    if (audio) audio.playbackRate = next
  }

  const changeVolume = (value) => {
    const audio = audioRef.current
    setVolume(value)
    setIsMuted(value === 0)
    if (audio) {
      audio.volume = value
      audio.muted = value === 0
    }
  }

  const toggleMute = () => {
    const audio = audioRef.current
    const next = !isMuted
    setIsMuted(next)
    if (audio) audio.muted = next
  }

  const progressPct = duration ? (currentTime / duration) * 100 : 0
  const bufferedPct = duration ? (buffered / duration) * 100 : 0

  return (
    <div className="bg-white border border-navy/10 rounded-2xl shadow-sm p-6 md:p-8">
      <div className="flex items-center gap-4">
        <button
          type="button"
          onClick={togglePlayback}
          aria-pressed={isPlaying}
          aria-label={isPlaying ? 'Pause podcast' : 'Play podcast'}
          className="shrink-0 w-14 h-14 rounded-full bg-crimson text-white flex items-center justify-center hover:bg-crimson-dark transition-colors"
        >
          {isPlaying ? <Pause size={22} /> : <Play size={22} className="ml-0.5" />}
        </button>
        <div>
          <h2 className="font-medium text-navy text-lg">
            Episode {episode.number} — {episode.title}
          </h2>
          <p className="text-sm text-navy/60">Cartesian Robotics #25153</p>
        </div>
      </div>

      {episode.description && (
        <p className="text-navy/70 mt-6">{episode.description}</p>
      )}

      {/* Scrubbable progress rail — buffered range shown as a faint fill,
          playback progress as a solid one, matching the layered-track
          convention most podcast/media players use. */}
      <div className="mt-6">
        <div className="relative h-2 flex items-center">
          <div className="absolute inset-x-0 h-1.5 rounded-full bg-navy/10" />
          <div
            className="absolute left-0 h-1.5 rounded-full bg-navy/15"
            style={{ width: `${bufferedPct}%` }}
          />
          <div
            className="absolute left-0 h-1.5 rounded-full bg-crimson"
            style={{ width: `${progressPct}%` }}
          />
          <input
            type="range"
            min={0}
            max={duration || 0}
            step={0.1}
            value={currentTime}
            onChange={(e) => {
              setIsScrubbing(true)
              setCurrentTime(Number(e.target.value))
            }}
            onMouseUp={(e) => {
              setIsScrubbing(false)
              seekTo(Number(e.target.value))
            }}
            onTouchEnd={(e) => {
              setIsScrubbing(false)
              seekTo(Number(e.target.value))
            }}
            aria-label="Seek"
            className="relative w-full h-2 appearance-none bg-transparent cursor-pointer
              [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-3.5 [&::-webkit-slider-thumb]:h-3.5
              [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-crimson [&::-webkit-slider-thumb]:shadow
              [&::-webkit-slider-thumb]:border-2 [&::-webkit-slider-thumb]:border-white
              [&::-moz-range-thumb]:w-3.5 [&::-moz-range-thumb]:h-3.5 [&::-moz-range-thumb]:rounded-full
              [&::-moz-range-thumb]:bg-crimson [&::-moz-range-thumb]:border-2 [&::-moz-range-thumb]:border-white"
          />
        </div>
        <div className="flex justify-between text-xs text-navy/50 mt-1.5 tabular-nums">
          <span>{formatTime(currentTime)}</span>
          <span>{formatTime(duration)}</span>
        </div>
      </div>

      {/* Transport controls: skip ±15s, speed, volume — the standard
          podcast toolset beyond a bare play button. */}
      <div className="flex items-center justify-between mt-4 flex-wrap gap-y-3">
        <div className="flex items-center gap-1">
          <button
            type="button"
            onClick={() => skip(-SKIP_SECONDS)}
            aria-label={`Back ${SKIP_SECONDS} seconds`}
            className="relative w-9 h-9 rounded-full flex items-center justify-center text-navy/60 hover:text-crimson hover:bg-crimson-50 transition-colors"
          >
            <RotateCcw size={18} />
            <span className="absolute inset-0 flex items-center justify-center text-[9px] font-semibold pt-px">
              {SKIP_SECONDS}
            </span>
          </button>
          <button
            type="button"
            onClick={() => skip(SKIP_SECONDS)}
            aria-label={`Forward ${SKIP_SECONDS} seconds`}
            className="relative w-9 h-9 rounded-full flex items-center justify-center text-navy/60 hover:text-crimson hover:bg-crimson-50 transition-colors"
          >
            <RotateCw size={18} />
            <span className="absolute inset-0 flex items-center justify-center text-[9px] font-semibold pt-px">
              {SKIP_SECONDS}
            </span>
          </button>
          <button
            type="button"
            onClick={cycleSpeed}
            aria-label="Playback speed"
            className="ml-1 h-9 px-3 rounded-full text-xs font-semibold text-navy/60 hover:text-crimson hover:bg-crimson-50 transition-colors tabular-nums"
          >
            {speed}×
          </button>
        </div>

        <div className="flex items-center gap-2 min-w-[140px]">
          <button
            type="button"
            onClick={toggleMute}
            aria-label={isMuted ? 'Unmute' : 'Mute'}
            className="shrink-0 text-navy/60 hover:text-crimson transition-colors"
          >
            {isMuted || volume === 0 ? <VolumeX size={18} /> : <Volume2 size={18} />}
          </button>
          <input
            type="range"
            min={0}
            max={1}
            step={0.01}
            value={isMuted ? 0 : volume}
            onChange={(e) => changeVolume(Number(e.target.value))}
            aria-label="Volume"
            className="w-full h-1.5 rounded-full appearance-none bg-navy/10 accent-crimson cursor-pointer
              [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-3 [&::-webkit-slider-thumb]:h-3
              [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-crimson"
          />
        </div>
      </div>

      <audio
        ref={audioRef}
        className="hidden"
        preload="metadata"
        src={episode.audioSrc}
        onPlay={() => setIsPlaying(true)}
        onPause={() => setIsPlaying(false)}
        onEnded={() => setIsPlaying(false)}
      >
        Your browser does not support the audio element.
      </audio>

      <a
        href={episode.audioSrc}
        download
        className="inline-flex items-center gap-2 text-sm text-navy/60 hover:text-crimson transition-colors mt-4"
      >
        <Download size={14} />
        Download the episode
      </a>
    </div>
  )
}

export default function Podcast() {
  return (
    <>
      <PageBanner
        title="BioBuzz Podcast"
        breadcrumbs={[{ label: 'Podcast' }]}
      />

      <section className="py-16 md:py-24">
        <div className="max-w-3xl mx-auto px-6">
          <Reveal>
            <p className="text-navy/70 text-lg mb-10">
              Our BioBuzz season podcast — Cartesian Robotics #25153 talks
              through the game, our strategy and what it's like building for
              FTC this year. New episodes on different FTC topics drop
              throughout the season.
            </p>

            <div className="space-y-6">
              {podcastEpisodes.map((episode) => (
                <Episode key={episode.number} episode={episode} />
              ))}
            </div>
          </Reveal>
        </div>
      </section>
    </>
  )
}
