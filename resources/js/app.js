import './bootstrap';

import Chart from 'chart.js/auto';
import '@fortawesome/fontawesome-free/js/all.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.Chart = Chart;

document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        dark: localStorage.getItem('theme-dark') === 'true',
        toggle() {
            this.dark = !this.dark;
            localStorage.setItem('theme-dark', this.dark);
        }
    });
    Alpine.store('menu', {
        isSideMenuOpen: false,
        isPagesMenuOpen: false,
        isNotificationsMenuOpen: false,
        isProfileMenuOpen: false,
        toggleSideMenu() { this.isSideMenuOpen = !this.isSideMenuOpen },
        closeSideMenu() { this.isSideMenuOpen = false },
        togglePagesMenu() { this.isPagesMenuOpen = !this.isPagesMenuOpen },
        toggleNotificationsMenu() { this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen },
        closeNotificationsMenu() { this.isNotificationsMenuOpen = false },
        toggleProfileMenu() { this.isProfileMenuOpen = !this.isProfileMenuOpen },
        closeProfileMenu() { this.isProfileMenuOpen = false }
    });
});

Alpine.start();

// Charts initialization (imported from npm via Vite)
import './charts';
