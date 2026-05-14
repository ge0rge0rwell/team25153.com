const sponsors = [
  '/wp-content/uploads/2025/11/4.jpg',
  '/wp-content/uploads/2025/11/3.jpg',
  '/wp-content/uploads/2025/11/2.jpg',
  '/wp-content/uploads/2025/11/6.jpg',
  '/wp-content/uploads/2025/11/5.jpg',
]

// Duplicate for seamless loop
const allSponsors = [...sponsors, ...sponsors]

export default function LogoCarousel() {
  return (
    <div className="overflow-hidden py-4 relative">
      {/* Fade edges */}
      <div className="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none" />
      <div className="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none" />

      <div className="logo-track">
        {allSponsors.map((src, i) => (
          <div key={i} className="flex-shrink-0 w-36 mx-5 flex items-center justify-center">
            <img
              src={src}
              alt={`Sponsor ${(i % sponsors.length) + 1}`}
              className="h-16 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-300 opacity-60 hover:opacity-100"
            />
          </div>
        ))}
      </div>
    </div>
  )
}
