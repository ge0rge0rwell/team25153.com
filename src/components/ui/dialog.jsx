import * as DialogPrimitive from '@radix-ui/react-dialog'
import { AnimatePresence, motion } from 'framer-motion'
import { X } from 'lucide-react'
import { cn } from '../../lib/utils'

// Thin shadcn-style wrapper around Radix Dialog, animated with framer-motion.
// Radix owns focus-trap/ESC/portal/aria; forceMount + AnimatePresence keyed on
// the controlled `open` prop is what lets framer-motion drive the exit
// animation instead of Radix's own instant unmount.

export const Dialog = DialogPrimitive.Root
export const DialogTrigger = DialogPrimitive.Trigger
export const DialogClose = DialogPrimitive.Close

export function DialogContent({ open, onOpenChange, className, overlayClassName, children, ...rest }) {
  return (
    <DialogPrimitive.Root open={open} onOpenChange={onOpenChange}>
      <AnimatePresence>
        {open && (
          <DialogPrimitive.Portal forceMount>
            <DialogPrimitive.Overlay asChild forceMount>
              <motion.div
                initial={{ opacity: 0 }}
                animate={{ opacity: 1 }}
                exit={{ opacity: 0 }}
                transition={{ duration: 0.2 }}
                className={cn('fixed inset-0 z-50 bg-black/85 backdrop-blur-md', overlayClassName)}
              />
            </DialogPrimitive.Overlay>
            <DialogPrimitive.Content asChild forceMount {...rest}>
              <motion.div
                initial={{ opacity: 0, scale: 0.9 }}
                animate={{ opacity: 1, scale: 1 }}
                exit={{ opacity: 0, scale: 0.9, rotate: -1 }}
                transition={{ type: 'spring', stiffness: 300, damping: 28 }}
                className={cn(
                  'fixed z-50 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-w-4xl w-[calc(100%-2rem)] flex flex-col items-center justify-center outline-none',
                  className
                )}
              >
                <DialogPrimitive.Close className="absolute -top-14 right-0 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 p-2.5 rounded-full transition-all duration-200 cursor-pointer">
                  <X size={24} />
                </DialogPrimitive.Close>
                {children}
              </motion.div>
            </DialogPrimitive.Content>
          </DialogPrimitive.Portal>
        )}
      </AnimatePresence>
    </DialogPrimitive.Root>
  )
}

export const DialogTitle = DialogPrimitive.Title
export const DialogDescription = DialogPrimitive.Description
