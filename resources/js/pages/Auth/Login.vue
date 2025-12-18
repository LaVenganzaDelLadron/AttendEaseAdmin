<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const page = usePage() as any;
const flash = computed(() => {
    return (page.props as any)?.flash ?? (page.props?.value as any)?.flash ?? null;
});
const email = ref('');
const password = ref('');
const remember = ref(false);

function signIn() {
    router.post('/signin', {
        email: email.value,
        password: password.value,
        remember: remember.value ? 1 : 0,
    });
}
</script>

<template>
    <Head title="Login - AttendEase" />
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-indigo-900 flex items-center justify-center px-4 py-8">
        <!-- Animated gradient background elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        </div>

        <!-- Login Card -->
        <div class="relative z-10 w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-400 to-blue-500 rounded-lg flex items-center justify-center font-bold text-xl text-white">
                        A
                    </div>
                    <h1 class="text-3xl font-bold text-white">AttendEase</h1>
                </div>
                <p class="text-slate-300">Sign in to your account</p>
            </div>

            <!-- Card -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-2xl">
                <!-- Flash Messages -->
                <div v-if="flash && flash.success" class="mb-6 p-4 bg-green-500/20 border border-green-500/50 rounded-lg text-green-400 text-sm">
                    {{ flash.success }}
                </div>
                <div v-if="flash && flash.error" class="mb-6 p-4 bg-red-500/20 border border-red-500/50 rounded-lg text-red-400 text-sm">
                    {{ flash.error }}
                </div>

                <!-- Form -->
                <form @submit.prevent="signIn" class="space-y-6">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-white mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <input
                                id="email"
                                v-model="email"
                                type="email"
                                placeholder="your@email.com"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 pl-10 text-white placeholder-slate-400 focus:outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 transition"
                                required
                            />
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-white mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <input
                                id="password"
                                v-model="password"
                                type="password"
                                placeholder="••••••••"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 pl-10 text-white placeholder-slate-400 focus:outline-none focus:border-indigo-400 focus:ring-1 focus:ring-indigo-400 transition"
                                required
                            />
                        </div>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center">
                        <input
                            id="remember"
                            v-model="remember"
                            type="checkbox"
                            class="w-4 h-4 rounded border-white/20 bg-white/10 text-indigo-600 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-0 cursor-pointer"
                        />
                        <label for="remember" class="ml-3 text-sm text-slate-300 cursor-pointer">
                            Remember me
                        </label>
                    </div>

                    <!-- Login Button -->
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-500 hover:to-blue-500 text-white font-semibold py-3 rounded-lg transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-0"
                    >
                        Sign In
                    </button>
                </form>

                <!-- Divider -->
                <div class="my-6 flex items-center">
                    <div class="flex-1 border-t border-white/20"></div>
                    <div class="px-3 text-sm text-slate-400">or</div>
                    <div class="flex-1 border-t border-white/20"></div>
                </div>

                <!-- Sign Up Link -->
                <p class="text-center text-slate-300 text-sm">
                    Don't have an account?
                    <Link href="/signup" class="text-indigo-400 hover:text-indigo-300 font-semibold transition">
                        Sign up here
                    </Link>
                </p>
            </div>

            <!-- Footer Text -->
            <p class="text-center text-slate-400 text-xs mt-6">
                © 2025 AttendEase. All rights reserved.
            </p>
        </div>
    </div>
</template>
