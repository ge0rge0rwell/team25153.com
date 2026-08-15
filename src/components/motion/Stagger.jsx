// Plain static wrappers — list/grid children used to cascade in on scroll
// via framer-motion's whileInView; that scroll-linked animation has been
// removed sitewide, so these now just render their elements directly. Kept
// as pass-through components (rather than deleted) so call sites across
// every page don't all need touching.
export function StaggerGroup({
  as: Tag = 'div',
  staggerChildren, // eslint-disable-line no-unused-vars -- kept for call-site compatibility, animation removed
  delayChildren, // eslint-disable-line no-unused-vars
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

export function StaggerItem({ as: Tag = 'div', className, children, ...rest }) {
  return (
    <Tag className={className} {...rest}>
      {children}
    </Tag>
  )
}
