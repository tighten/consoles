<template>
    <div class="text-center">
        <div class="input">
            <input class="p-4 border border-gray-500" v-model="filter">
        </div>
        <div class="list">
            <!-- Style in Tailwind to overlap like a modal and look less ugly -->
            <div v-for="console in filteredConsoles">
                {{ console.name }}<br>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            'consoles': Array,
        },
        data: function () {
            return {
                filter: '',
            };
        },
        mounted() {
            // @todo Capture keyboard input even when they don't click
            // in the input
        },
        computed: {
            filteredConsoles: function () {
                if (this.filter === '') {
                    return this.consoles;
                }

                return this.consoles.filter(thisConsole => {
                    // @todo later move to fuzzy search
                    return thisConsole.name.includes(this.filter);
                });
            },
        }
    }
</script>
