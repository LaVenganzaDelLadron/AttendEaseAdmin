<script setup lang="ts">
import Layout from '../Dashboard.vue'
</script>

<template>
  <Layout>
    <!-- Attendance Monitoring Page -->
    <div class="space-y-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Attendance Monitoring</h1>
        <p class="text-gray-600 text-sm mt-2">Track student attendance patterns, session logs, and generate comprehensive attendance reports</p>
      </div>

      <!-- Attendance Overview Statistics -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Overall Attendance Rate -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Overall Attendance</p>
              <h3 class="text-3xl font-bold text-green-600 mt-2">94.2%</h3>
              <p class="text-xs text-gray-500 mt-2">↑ 2.1% from last week</p>
            </div>
            <div class="bg-green-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Total Sessions Recorded -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Sessions Recorded</p>
              <h3 class="text-3xl font-bold text-blue-600 mt-2">1,856</h3>
              <p class="text-xs text-gray-500 mt-2">This semester</p>
            </div>
            <div class="bg-blue-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Students At Risk -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">At-Risk Students</p>
              <h3 class="text-3xl font-bold text-red-600 mt-2">127</h3>
              <p class="text-xs text-gray-500 mt-2">&lt;75% attendance</p>
            </div>
            <div class="bg-red-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4v2m0 2a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm0-13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Flagged Irregularities -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Flagged Issues</p>
              <h3 class="text-3xl font-bold text-amber-600 mt-2">34</h3>
              <p class="text-xs text-gray-500 mt-2">Pending review</p>
            </div>
            <div class="bg-amber-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4v.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <!-- Search and Filter Panel -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
        <div class="space-y-4">
          <!-- First Row -->
          <div class="flex flex-col lg:flex-row gap-4">
            <!-- Search by Student or Course -->
            <div class="flex-1">
              <div class="relative">
                <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"></path>
                </svg>
                <input type="text" placeholder="Search by student name, ID, or course..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              </div>
            </div>

            <!-- Generate Report Button -->
            <button class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all font-medium flex items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
              </svg>
              Generate Report
            </button>
          </div>

          <!-- Second Row -->
          <div class="flex flex-col lg:flex-row gap-4">
            <!-- Filter by Date Range -->
            <div class="flex-1">
              <label class="block text-xs font-medium text-gray-700 mb-1">Date Range</label>
              <div class="flex gap-2">
                <input type="date" class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <span class="flex items-center text-gray-400">to</span>
                <input type="date" class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              </div>
            </div>

            <!-- Filter by Course -->
            <select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Courses</option>
              <option value="mat101">Mathematics 101</option>
              <option value="phy201">Physics 201</option>
              <option value="eng301">English Literature</option>
              <option value="che102">Chemistry 102</option>
            </select>

            <!-- Filter by Status -->
            <select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Status</option>
              <option value="present">Present</option>
              <option value="late">Late</option>
              <option value="absent">Absent</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Attendance Records Table -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Student</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Course</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Date & Time</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Status</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Check-in Method</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Location</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Notes</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <!-- Attendance Record 1 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-xs font-bold">AK</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Alex Kumar</p>
                      <p class="text-xs text-gray-500">STU-2024-001</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Mathematics 101</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Dec 18, 10:32 AM</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Present</span>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">QR Code</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-1">
                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"></path>
                    </svg>
                    <p class="text-xs text-gray-600">Room A-101</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-xs text-gray-500">—</p>
                </td>
                <td class="px-6 py-4">
                  <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                  </button>
                </td>
              </tr>

              <!-- Remaining rows kept as static examples (omitted here for brevity) -->
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 border-t border-gray-200 px-6 py-4 flex items-center justify-between">
          <p class="text-sm text-gray-600">Showing <span class="font-semibold">1</span> to <span class="font-semibold">4</span> of <span class="font-semibold">15,420</span> records</p>
          <div class="flex gap-2">
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">Previous</button>
            <button class="px-3 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700 transition">1</button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">2</button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">3</button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">Next</button>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>
