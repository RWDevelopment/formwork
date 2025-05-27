<script type="module">

    import sprae from 'https://cdn.jsdelivr.net/npm/sprae@8.1.3/dist/sprae.min.js';

    const app = sprae(document.documentElement, {

        theme: null,
        isLight: null,
        colors: [
            'red','violet','indigo','purple','blue','lime','green','yellow','amber','pumpkin','sand','grey','slate'
        ],
        color: localStorage.getItem("color") || 'blue',
        init() {
            this.theme = localStorage.getItem("theme") || 'light';
            this.isLight = this.theme === 'light' ? true : false;
            localStorage.setItem("theme", this.theme);
        },
        toggleTheme() {
            this.isLight = !this.isLight;
            this.theme = this.isLight ? 'light':'dark';
            localStorage.setItem("theme", this.theme);
        },
        toggleColor(event) {
            this.color = event.target.value;
            localStorage.setItem("color", this.color);
        }

    })

</script>