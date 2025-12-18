<template>
  <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <nav class="bg-white shadow-md border-r border-gray-200 h-screen fixed top-0 left-0 min-w-[250px] py-6 px-4 overflow-y-auto">
      <div class="relative flex flex-col h-full">
        <!-- Branding Section -->
        <div class="mb-8">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" />
              </svg>
            </div>
            <div>
              <p class="text-sm font-bold text-gray-900">AttendEase</p>
              <p class="text-xs text-gray-500">Attendance System</p>
            </div>
          </div>
        </div>

        <!-- Navigation Content -->
        <div class="flex-1 space-y-6">

          <!-- Management -->
          <div>
            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wide mb-3">
              Management
            </h3>
            <ul class="space-y-2 px-2">
              <li>
                <Link href="/dashboard"
                  class="flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-all">
                  <span>Dashboard</span>
                </Link>
              </li>

              <li>
                <Link href="/users"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>User Management</span>
                </Link>
              </li>

              <li>
                <Link href="/courses"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>Courses</span>
                </Link>
              </li>
            </ul>
          </div>

          <!-- Monitoring -->
          <div>
            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wide mb-3">
              Monitoring
            </h3>
            <ul class="space-y-2 px-2">
              <li>
                <Link href="/attendance"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>Attendance Monitoring</span>
                </Link>
              </li>

              <li>
                <Link href="/rooms"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>Rooms</span>
                </Link>
              </li>

              <li>
                <Link href="/sessions"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>Active Sessions</span>
                </Link>
              </li>
            </ul>
          </div>

          <!-- Academic -->
          <div>
            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wide mb-3">
              Academic
            </h3>
            <ul class="space-y-2 px-2">
              <li>
                <Link href="/subjects"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>Subjects</span>
                </Link>
              </li>

              <li>
                <Link href="/students"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>Student Lists</span>
                </Link>
              </li>

              <li>
                <Link href="/teachers"
                  class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 transition-all">
                  <span>Teachers</span>
                </Link>
              </li>
            </ul>
          </div>

          <!-- Reports -->
          <div>
            <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wide mb-3">
              Reports
            </h3>
            <ul class="space-y-2 px-2">
              <li>
                <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100">
                  Attendance Reports
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100">
                  Analytics
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Bottom -->
        <div class="mt-auto pt-6 border-t border-gray-200">
          <div class="px-2 py-3 bg-gray-50 rounded-lg border border-gray-200">
            <div class="flex items-center gap-2 mb-3">
              <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-xs font-bold">
                JD
              </div>
              <div class="flex-1">
                <p class="text-xs font-semibold text-gray-900">Prof. Santos</p>
                <p class="text-xs text-gray-500">Administrator</p>
              </div>
            </div>

            <button
              @click="logout"
              class="w-full px-2 py-1.5 text-xs font-medium text-red-600 hover:bg-red-50 rounded transition-all flex items-center justify-center gap-1">
              Logout
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto ml-[250px]">
      <slot />
    </main>
  </div>
</template>

<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3'

const logout = () => {
  router.post('/logout')
}
</script>
