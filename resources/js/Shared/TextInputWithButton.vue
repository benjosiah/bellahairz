<template>
    <div>
        <label v-if="label" class="form-label" :for="id">{{ label }}:</label>
        <div class="flex justify-between">
            <input :id="id" ref="input" v-bind="$attrs" class="form-input uppercase" :class="{ error: errors.length }"
                   :type="type" :value="value" @input="$emit('input', $event.target.value)">
            <button class="btn-indigo flex items-center ml-2" @click.prevent="onClick">
                <div v-if="isLoading" class="btn-spinner mr-2"/>
                {{ buttonLabel }}
            </button>
        </div>
        <div v-if="errors.length" class="form-error">{{ errors[0] }}</div>
    </div>
</template>

<script>
export default {
    inheritAttrs: false,
    props: {
        id: {
            type: String,
            default() {
                return `text-input-with-button${this._uid}`
            },
        },
        type: {
            type: String,
            default: 'text',
        },
        value: String,
        label: String,
        buttonLabel: String,
        isLoading: {
            type: Boolean,
            default: false,
        },
        onClick: Function,
        errors: {
            type: Array,
            default: () => [],
        },
    },
    methods: {
        focus() {
            this.$refs.input.focus()
        },
        select() {
            this.$refs.input.select()
        },
        setSelectionRange(start, end) {
            this.$refs.input.setSelectionRange(start, end)
        },
    },
}
</script>
