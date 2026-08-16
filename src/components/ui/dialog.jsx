import * as DialogPrimitive from '@radix-ui/react-dialog'
import { X } from 'lucide-react'
import { cn } from '../../lib/utils'

// Thin shadcn-style wrapper around Radix Dialog. Radix owns mount/unmount,
// focus-trap/ESC/portal/aria on its own — no animation library involved.

export const Dialog = DialogPrimitive.Root
export const DialogTrigger = DialogPrimitive.Trigger
export const DialogClose = DialogPrimitive.Close

export function DialogContent({ open, onOpenChange, className, overlayClassName, children, ...rest }) {
  return (
    <DialogPrimitive.Root open={open} onOpenChange={onOpenChange}>
      {open && (
        <DialogPrimitive.Portal>
          <DialogPrimitive.Overlay
            className={cn('fixed inset-0 z-50 bg-black/85 backdrop-blur-md', overlayClassName)}
          />
          <DialogPrimitive.Content
            {...rest}
            className={cn(
              'fixed z-50 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 max-w-4xl w-[calc(100%-2rem)] flex flex-col items-center justify-center outline-none',
              className
            )}
          >
            <DialogPrimitive.Close className="absolute -top-14 right-0 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 p-2.5 rounded-full transition-all duration-200 cursor-pointer">
              <X size={24} />
            </DialogPrimitive.Close>
            {children}
          </DialogPrimitive.Content>
        </DialogPrimitive.Portal>
      )}
    </DialogPrimitive.Root>
  )
}

export const DialogTitle = DialogPrimitive.Title
export const DialogDescription = DialogPrimitive.Description
