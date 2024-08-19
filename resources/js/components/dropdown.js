import { computePosition, flip, offset, shift } from "@floating-ui/dom"
import Alpine from "alpinejs"

Alpine.data("dropdown", () => ({
    isActive: false,
    isMounted: false,

    async update() {
        const { x, y } = await computePosition(this.$refs.trigger, this.$refs.menu, {
            placement: this.$root.dataset.placement || "bottom",
            middleware: [offset(6), flip(), shift()]
        })
        Object.assign(this.$refs.menu.style, {
            left: `${x}px`,
            top: `${y}px`
        })
    },

    async open() {
        this.isMounted = true
        await this.$nextTick()
        this.isActive = true
        await this.$nextTick()
        await this.update()
    },

    async close() {
        this.isActive = false
        await new Promise(resolve => setTimeout(resolve, 150))
        this.isMounted = false
    },

    async toggle() {
        this.isActive ? this.close() : this.open()
    },

    item: {
        ['x-on:click']() {
            this.close()
        }
    }
}))