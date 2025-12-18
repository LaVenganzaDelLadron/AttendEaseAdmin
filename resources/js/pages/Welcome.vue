<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome to AttendEase" />
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-indigo-900 text-white overflow-hidden">
        <!-- Animated gradient background elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
        </div>

        <!-- Navigation Bar -->
        <nav class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-lg flex items-center justify-center font-bold text-lg">
                        A
                    </div>
                    <h1 class="text-2xl font-bold">AttendEase</h1>
                </div>
                <div class="flex gap-4">
                    <Link href="/login" class="px-6 py-2 rounded-lg border border-indigo-400 text-indigo-300 hover:bg-indigo-400 hover:text-white transition-colors">
                        Login
                    </Link>
                    <Link href="/signup" class="px-6 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 transition-colors font-medium">
                        Sign Up
                    </Link>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
            <!-- Hero Section -->
            <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-24">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Manage Attendance.
                    <span class="bg-gradient-to-r from-indigo-400 to-blue-400 bg-clip-text text-transparent">Monitor Students.</span>
                    Simplify Academics.
                </h2>
                <p class="text-lg sm:text-xl text-slate-300 mb-8 leading-relaxed">
                    AttendEase is a comprehensive platform designed to streamline attendance tracking, monitor student progress, and simplify academic management for institutions of all sizes.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <Link href="/login" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-500 rounded-lg font-semibold transition-colors transform hover:scale-105">
                        Login to Dashboard
                    </Link>
                    <Link href="/signup" class="px-8 py-3 border-2 border-indigo-400 text-indigo-300 hover:bg-indigo-400/10 rounded-lg font-semibold transition-colors transform hover:scale-105">
                        Create an Account
                    </Link>
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                <!-- Card 1: Attendance Tracking -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 border border-white/20 hover:border-indigo-400/50 transition-all hover:bg-white/15 group cursor-default">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Attendance Tracking</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Real-time attendance marking with automated notifications and comprehensive reporting for each class session.
                    </p>
                </div>

                <!-- Card 2: Student Monitoring -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 border border-white/20 hover:border-indigo-400/50 transition-all hover:bg-white/15 group cursor-default">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 8.048M12 4.354L7.73 7.73m4.27-3.376l4.27 3.376M4.354 12a8 8 0 1116 0m-8 8a4 4 0 110-8.048M4.354 12l3.27 3.27m8.692-6.27l3.27 3.27" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Student Monitoring</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Track individual student performance, attendance patterns, and engagement metrics at a glance.
                    </p>
                </div>

                <!-- Card 3: Course Management -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 border border-white/20 hover:border-indigo-400/50 transition-all hover:bg-white/15 group cursor-default">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747c5.5 0 10-4.998 10-10.747S17.5 6.253 12 6.253z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Course Management</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Organize and manage multiple courses, sections, and schedules with ease across your institution.
                    </p>
                </div>

                <!-- Card 4: Teacher & Admin Control -->
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-8 border border-white/20 hover:border-indigo-400/50 transition-all hover:bg-white/15 group cursor-default">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Teacher & Admin Control</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Powerful tools for teachers and administrators to manage, analyze, and optimize academic operations.
                    </p>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-20 lg:mt-28 text-center">
                <p class="text-slate-300 text-lg mb-6">Ready to transform your institution's attendance management?</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <Link href="/signup" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-500 rounded-lg font-semibold transition-colors transform hover:scale-105">
                        Get Started Today
                    </Link>
                    <Link href="/login" class="px-8 py-3 border-2 border-slate-500 text-slate-300 hover:border-indigo-400 hover:text-indigo-300 rounded-lg font-semibold transition-colors">
                        Sign In
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
