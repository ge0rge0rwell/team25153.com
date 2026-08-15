// Plain static wrapper — content used to fade/slide in on scroll via
// framer-motion's whileInView; that scroll-linked animation has been removed
// sitewide, so this now just renders the element directly. Kept as a
// pass-through component (rather than deleted) so the ~30 call sites across
// every page don't all need touching.
export default function Reveal({
  as: Tag = 'div',
  direction, // eslint-disable-line no-unused-vars -- kept for call-site compatibility, animation removed
  delay, // eslint-disable-line no-unused-vars
  amount, // eslint-disable-line no-unused-vars
  className,
  children,
  ...rest
}) {
  return (
    <Tag className={className} {...rest}>
      {children}
    </Tag>
  )
}
