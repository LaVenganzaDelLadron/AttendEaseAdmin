<script setup lang="ts">
import Layout from '../Dashboard.vue'
</script>

<template>
  <Layout>
    <!-- Rooms Monitoring Page -->
    <div class="space-y-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Room & Location Monitoring</h1>
        <p class="text-gray-600 text-sm mt-2">Monitor room occupancy, location verification, and prevent fraudulent attendance attempts</p>
      </div>

      <!-- Room Overview Statistics -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Rooms -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Total Rooms</p>
              <h3 class="text-3xl font-bold text-blue-600 mt-2">42</h3>
              <p class="text-xs text-gray-500 mt-2">Across all buildings</p>
            </div>
            <div class="bg-blue-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0h-5.581m0 0H9.11m3.409 0H15.5m-3.409 0H7m8-6.5h-5"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Currently Occupied -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Currently Occupied</p>
              <h3 class="text-3xl font-bold text-green-600 mt-2">28</h3>
              <p class="text-xs text-gray-500 mt-2">66.7% utilization</p>
            </div>
            <div class="bg-green-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12a6 6 0 0 0-6-6 6 6 0 0 0-6 6 6 6 0 0 0 6 6 6 6 0 0 0 6-6z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Flagged Violations -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Location Violations</p>
              <h3 class="text-3xl font-bold text-red-600 mt-2">12</h3>
              <p class="text-xs text-gray-500 mt-2">Attempted outside zones</p>
            </div>
            <div class="bg-red-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4v2m0 2a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm0-13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Room Zones Configured -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Zones Configured</p>
              <h3 class="text-3xl font-bold text-indigo-600 mt-2">38</h3>
              <p class="text-xs text-gray-500 mt-2">Polygon boundaries active</p>
            </div>
            <div class="bg-indigo-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 0 1 3 16.382V5.618a1 1 0 0 1 .553-.894l5.447-2.724a2 2 0 0 1 1.887 0l5.447 2.724a1 1 0 0 1 .553.894v10.764a1 1 0 0 1-.553.894l-5.447 2.724a2 2 0 0 1-1.887 0z"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <!-- Search and Filter Panel -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
        <div class="flex flex-col lg:flex-row gap-4">
          <!-- Search by Room -->
          <div class="flex-1">
            <div class="relative">
              <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"></path>
              </svg>
              <input type="text" placeholder="Search by room name or code..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
          </div>

          <!-- Filter by Status -->
          <select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <option value="">All Status</option>
            <option value="occupied">Occupied</option>
            <option value="idle">Idle</option>
            <option value="scheduled">Scheduled</option>
            <option value="maintenance">Maintenance</option>
          </select>

          <!-- Filter by Building -->
          <select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <option value="">All Buildings</option>
            <option value="a">Building A</option>
            <option value="b">Building B</option>
            <option value="c">Building C</option>
            <option value="lab">Lab Complex</option>
          </select>
        </div>
      </div>

      <!-- Rooms Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <!-- Room Card 1 - Occupied -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
          <div class="h-2 bg-gradient-to-r from-green-500 to-emerald-600"></div>
          <div class="p-6">
            <!-- Room Header -->
            <div class="flex items-start justify-between mb-4">
              <div>
                <h3 class="text-lg font-bold text-gray-900">Room A-101</h3>
                <p class="text-xs text-gray-500 mt-1">Building A, Floor 1</p>
              </div>
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                <span class="w-2 h-2 mr-1.5 bg-green-600 rounded-full"></span>
                Occupied
              </span>
            </div>

            <!-- Room Info -->
            <div class="space-y-2 mb-4 pb-4 border-b border-gray-200">
              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-600">Current Occupancy</span>
                <span class="font-semibold text-gray-900">28/35</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-600 h-2 rounded-full" style="width: 80%"></div>
              </div>
              <div class="flex items-center gap-2 text-xs text-gray-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                </svg>
                <span>Mathematics 101 - Prof. Sarah Martinez</span>
              </div>
            </div>

            <!-- Location Verification -->
            <div class="mb-4 p-3 bg-green-50 rounded-lg">
              <div class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"></path>
                </svg>
                <div>
                  <p class="text-xs font-semibold text-green-900">Location Verified</p>
                  <p class="text-xs text-green-700 mt-1">All check-ins within zone</p>
                </div>
              </div>
            </div>

            <!-- Polygon Zone Info -->
            <div class="mb-4 p-3 bg-blue-50 rounded-lg">
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 0 1 3 16.382V5.618a1 1 0 0 1 .553-.894l5.447-2.724a2 2 0 0 1 1.887 0l5.447 2.724a1 1 0 0 1 .553.894v10.764a1 1 0 0 1-.553.894l-5.447 2.724a2 2 0 0 1-1.887 0z"></path>
                </svg>
                <span class="text-xs text-gray-600">Zone: Configured • Lat/Lng: (28.5244°, 77.1855°)</span>
              </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-2">
              <button class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition font-medium text-sm">View Details</button>
              <button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition font-medium text-sm">View Map</button>
            </div>
          </div>
        </div>

        <!-- Room Card 2 - Idle -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
          <div class="h-2 bg-gradient-to-r from-gray-400 to-gray-500"></div>
          <div class="p-6">
            <!-- Room Header -->
            <div class="flex items-start justify-between mb-4">
              <div>
                <h3 class="text-lg font-bold text-gray-900">Room B-205</h3>
                <p class="text-xs text-gray-500 mt-1">Building B, Floor 2 (Lab)</p>
              </div>
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                <span class="w-2 h-2 mr-1.5 bg-gray-500 rounded-full"></span>
                Idle
              </span>
            </div>

            <!-- Room Info -->
            <div class="space-y-2 mb-4 pb-4 border-b border-gray-200">
              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-600">Current Occupancy</span>
                <span class="font-semibold text-gray-900">0/28</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-gray-400 h-2 rounded-full" style="width: 0%"></div>
              </div>
              <div class="flex items-center gap-2 text-xs text-gray-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                </svg>
                <span>Next: Physics 201 at 11:05 AM</span>
              </div>
            </div>

            <!-- Location Verification -->
            <div class="mb-4 p-3 bg-gray-50 rounded-lg">
              <div class="flex items-start gap-2">
                <svg class="w-5 h-5 text-gray-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                </svg>
                <div>
                  <p class="text-xs font-semibold text-gray-700">No Active Session</p>
                  <p class="text-xs text-gray-600 mt-1">Awaiting next scheduled class</p>
                </div>
              </div>
            </div>

            <!-- Polygon Zone Info -->
            <div class="mb-4 p-3 bg-blue-50 rounded-lg">
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 0 1 3 16.382V5.618a1 1 0 0 1 .553-.894l5.447-2.724a2 2 0 0 1 1.887 0l5.447 2.724a1 1 0 0 1 .553.894v10.764a1 1 0 0 1-.553.894l-5.447 2.724a2 2 0 0 1-1.887 0z"></path>
                </svg>
                <span class="text-xs text-gray-600">Zone: Configured • Lat/Lng: (28.5250°, 77.1865°)</span>
              </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-2">
              <button class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition font-medium text-sm">View Details</button>
              <button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition font-medium text-sm">View Map</button>
            </div>
          </div>
        </div>

        <!-- Room Card 3 - Violation Detected -->
        <div class="bg-white rounded-xl shadow-sm border border-red-200 overflow-hidden hover:shadow-md transition">
          <div class="h-2 bg-gradient-to-r from-red-500 to-pink-600"></div>
          <div class="p-6">
            <!-- Room Header -->
            <div class="flex items-start justify-between mb-4">
              <div>
                <h3 class="text-lg font-bold text-gray-900">Room C-301</h3>
                <p class="text-xs text-gray-500 mt-1">Building C, Floor 3</p>
              </div>
              <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                <span class="w-2 h-2 mr-1.5 bg-red-600 rounded-full"></span>
                Alert
              </span>
            </div>

            <!-- Room Info -->
            <div class="space-y-2 mb-4 pb-4 border-b border-gray-200">
              <div class="flex items-center justify-between">
                <span class="text-sm text-gray-600">Current Occupancy</span>
                <span class="font-semibold text-gray-900">32/35</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-600 h-2 rounded-full" style="width: 91%"></div>
              </div>
              <div class="flex items-center gap-2 text-xs text-gray-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                </svg>
                <span>English Literature - Prof. James Anderson</span>
              </div>
            </div>

            <!-- Location Violation Alert -->
            <div class="mb-4 p-3 bg-red-50 rounded-lg border border-red-200">
              <div class="flex items-start gap-2">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"></path>
                </svg>
                <div>
                  <p class="text-xs font-semibold text-red-900">Location Violation Detected</p>
                  <p class="text-xs text-red-700 mt-1">2 check-in attempts outside zone boundary</p>
                </div>
              </div>
            </div>

            <!-- Polygon Zone Info -->
            <div class="mb-4 p-3 bg-blue-50 rounded-lg">
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 0 1 3 16.382V5.618a1 1 0 0 1 .553-.894l5.447-2.724a2 2 0 0 1 1.887 0l5.447 2.724a1 1 0 0 1 .553.894v10.764a1 1 0 0 1-.553.894l-5.447 2.724a2 2 0 0 1-1.887 0z"></path>
                </svg>
                <span class="text-xs text-gray-600">Zone: Configured • Lat/Lng: (28.5232°, 77.1878°)</span>
              </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-2">
              <button class="flex-1 px-3 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition font-medium text-sm">Review Violations</button>
              <button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition font-medium text-sm">View Map</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>
