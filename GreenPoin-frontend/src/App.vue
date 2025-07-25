<!-- src/App.vue -->
<template>
  <div class="min-h-screen bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-green-600 text-white p-4 shadow-md flex items-center justify-between">
      <div class="flex items-center gap-3">
        <img src="/vite.svg" class="h-10" alt="Logo JagoSampah" />
        <h1 class="text-xl font-bold tracking-wide">JagoSampah</h1>
      </div>
      <nav class="space-x-4">
        <router-link to="/" class="hover:underline">Beranda</router-link>
        <router-link to="/dashboard" class="hover:underline">Dashboard RT/RW</router-link>
        <router-link to="/lapor" class="hover:underline">Lapor</router-link>
        <router-link to="/leaderboard" class="hover:underline">Leaderboard</router-link>
        <router-link to="/redeem" class="hover:underline">Redeem</router-link>
      </nav>
    </header>

    <!-- Content -->
    <main class="p-6">
      <router-view />
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4 text-sm text-gray-600">
      &copy; 2025 JagoSampah • Komunitas RT/RW Cerdas & Peduli Lingkungan
    </footer>
  </div>
</template>

<script setup>
import Header from './components/Header.vue'
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
</script>
