import { useRef, useState } from 'react'
import { Pause, Play, Download } from 'lucide-react'
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

// Autoplay is blocked by browsers without a user gesture, so each episode
// just loads eagerly and lets its visible controls handle playback.
function Episode({ episode }) {
  const audioRef = useRef(null)
  const [isPlaying, setIsPlaying] = useState(false)

  const togglePlayback = () => {
    const audio = audioRef.current
    if (!audio) return
    if (isPlaying) audio.pause()
    else audio.play()
  }

  return (
    <div className="bg-white border border-navy/10 rounded-2xl shadow-sm p-6 md:p-8">
      <div className="flex items-center gap-4">
        <button
          type="button"
          onClick={togglePlayback}
          aria-pressed={isPlaying}
          aria-label={isPlaying ? 'Pause podcast' : 'Play podcast'}
          className="shrink-0 w-14 h-14 rounded-full bg-crimson text-white flex items-center justify-center hover:bg-crimson/90 transition-colors"
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

      <audio
        ref={audioRef}
        className="w-full mt-6"
        controls
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
