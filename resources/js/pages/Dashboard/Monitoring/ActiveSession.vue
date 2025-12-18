<script setup lang="ts">
import Layout from '../Dashboard.vue'
</script>

<template>
	<Layout>
		<!-- Active Session Monitoring Page -->
		<div class="space-y-6">
			<!-- Header -->
			<div class="mb-8">
				<h1 class="text-3xl font-bold text-gray-800">Active Sessions</h1>
				<p class="text-gray-600 text-sm mt-2">Real-time monitoring of ongoing class sessions with live attendance tracking</p>
			</div>

			<!-- Active Sessions Overview -->
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
				<!-- Total Active Sessions -->
				<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
					<div class="flex items-start justify-between">
						<div>
							<p class="text-gray-600 text-sm font-medium">Active Sessions</p>
							<h3 class="text-3xl font-bold text-green-600 mt-2">12</h3>
							<p class="text-xs text-gray-500 mt-2">Currently ongoing</p>
						</div>
						<div class="bg-green-100 rounded-lg p-3">
							<svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
							</svg>
						</div>
					</div>
				</div>

				<!-- Total Students Tracked -->
				<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
					<div class="flex items-start justify-between">
						<div>
							<p class="text-gray-600 text-sm font-medium">Students Tracked</p>
							<h3 class="text-3xl font-bold text-blue-600 mt-2">456</h3>
							<p class="text-xs text-gray-500 mt-2">Across all sessions</p>
						</div>
						<div class="bg-blue-100 rounded-lg p-3">
							<svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 12H9m6 0a6 6 0 1 1-12 0 6 6 0 0 1 12 0z"></path>
							</svg>
						</div>
					</div>
				</div>

				<!-- Average Attendance Rate -->
				<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
					<div class="flex items-start justify-between">
						<div>
							<p class="text-gray-600 text-sm font-medium">Avg. Attendance Rate</p>
							<h3 class="text-3xl font-bold text-purple-600 mt-2">94.2%</h3>
							<p class="text-xs text-gray-500 mt-2">↑ 2.1% from last week</p>
						</div>
						<div class="bg-purple-100 rounded-lg p-3">
							<svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zm0 0V9a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v10m-6 0a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2m0 0V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z"></path>
							</svg>
						</div>
					</div>
				</div>

				<!-- Flagged Irregularities -->
				<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
					<div class="flex items-start justify-between">
						<div>
							<p class="text-gray-600 text-sm font-medium">Flagged Issues</p>
							<h3 class="text-3xl font-bold text-red-600 mt-2">8</h3>
							<p class="text-xs text-gray-500 mt-2">Require review</p>
						</div>
						<div class="bg-red-100 rounded-lg p-3">
							<svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4v2m0 2a9 9 0 1 1 0-18 9 9 0 0 1 0 18zm0-13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>

			<!-- Search and Filter Panel -->
			<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
				<div class="flex flex-col lg:flex-row gap-4">
					<!-- Search by Course or Teacher -->
					<div class="flex-1">
						<div class="relative">
							<svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"></path>
							</svg>
							<input type="text" placeholder="Search by course, teacher, or room..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
						</div>
					</div>

					<!-- Filter by Status -->
					<select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
						<option value="">All Status</option>
						<option value="active">Active</option>
						<option value="pending">Pending Start</option>
						<option value="ended">Recently Ended</option>
					</select>

					<!-- Filter by Department -->
					<select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
						<option value="">All Departments</option>
						<option value="engineering">Engineering</option>
						<option value="science">Science</option>
						<option value="arts">Arts</option>
						<option value="commerce">Commerce</option>
					</select>
				</div>
			</div>

			<!-- Active Sessions List -->
			<div class="space-y-4">
				<!-- Session Card 1 -->
				<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
					<div class="p-6">
						<!-- Session Header -->
						<div class="flex items-start justify-between mb-4">
							<div>
								<h3 class="text-lg font-bold text-gray-900">Mathematics 101 - Lecture</h3>
								<p class="text-xs text-gray-500 mt-1">MAT-101-001</p>
							</div>
							<div class="flex items-center gap-2">
								<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
									<span class="w-2 h-2 mr-1.5 bg-green-600 rounded-full animate-pulse"></span>
									Live
								</span>
								<span class="text-xs text-gray-500 font-mono">Started 10:32 AM</span>
							</div>
						</div>

						<!-- Session Details -->
						<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
							<div class="flex items-center gap-2">
								<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
								</svg>
								<span class="text-sm text-gray-600">Prof. Sarah Martinez</span>
							</div>
							<div class="flex items-center gap-2">
								<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0h-5.581m0 0H9.11m3.409 0H15.5m-3.409 0H7m8-6.5h-5"></path>
								</svg>
								<span class="text-sm text-gray-600">Room A-101</span>
							</div>
							<div class="flex items-center gap-2">
								<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
								</svg>
								<span class="text-sm text-gray-600">Duration: 1hr 50min</span>
							</div>
							<div class="flex items-center gap-2">
								<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
								</svg>
								<span class="text-sm text-gray-600">32 Enrolled</span>
							</div>
						</div>

						<!-- Attendance Live Counters -->
						<div class="grid grid-cols-4 gap-3 mb-4 p-4 bg-gray-50 rounded-lg">
							<div class="text-center">
								<div class="text-2xl font-bold text-green-600">28</div>
								<p class="text-xs text-gray-600 mt-1">Present</p>
							</div>
							<div class="text-center">
								<div class="text-2xl font-bold text-amber-600">3</div>
								<p class="text-xs text-gray-600 mt-1">Late</p>
							</div>
							<div class="text-center">
								<div class="text-2xl font-bold text-red-600">1</div>
								<p class="text-xs text-gray-600 mt-1">Absent</p>
							</div>
							<div class="text-center">
								<div class="text-2xl font-bold text-blue-600">0</div>
								<p class="text-xs text-gray-600 mt-1">Pending</p>
							</div>
						</div>

						<!-- Actions -->
						<div class="flex gap-2 pt-4 border-t border-gray-200">
							<button class="flex-1 px-4 py-2.5 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition font-medium text-sm">View Attendance Log</button>
							<button class="flex-1 px-4 py-2.5 bg-green-50 text-green-600 rounded-lg hover:bg-green-100 transition font-medium text-sm">View Student List</button>
							<button class="flex-1 px-4 py-2.5 bg-amber-50 text-amber-600 rounded-lg hover:bg-amber-100 transition font-medium text-sm">Flagged Items</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</Layout>
</template>
