<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';

const formattedDate = computed(() => {
	const now = new Date();
	return new Intl.DateTimeFormat(undefined, { month: 'long', day: 'numeric', year: 'numeric' }).format(now);
});
</script>

<template>
	<div>
		<Head title="Dashboard - AttendEase" />

		<!-- Header Section -->
		<div class="mb-8 pb-6 border-b border-gray-200">
			<div class="flex justify-between items-start">
				<div>
					<h1 class="text-3xl font-bold text-gray-800">Good Morning, Prof. Santos</h1>
					<p class="text-gray-500 text-sm mt-2">Today is {{ formattedDate }} | Fall 2024 Semester</p>
				</div>
				<div class="flex items-center gap-4">
					<div class="relative">
						<svg class="w-6 h-6 text-gray-600 cursor-pointer hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 0 0-4-5.659V5a2 2 0 1 0-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 1 1-6 0v-1m6 0H9"></path>
						</svg>
						<span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
					</div>
					<div class="text-right">
						<p class="text-sm font-semibold text-gray-700">Active</p>
						<p class="text-xs text-green-600">Online</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Summary Statistics Section -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
			<!-- Total Enrolled Students -->
			<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
				<div class="flex items-start justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Total Enrolled Students</p>
						<h3 class="text-3xl font-bold text-blue-600 mt-2">1,245</h3>
						<p class="text-xs text-gray-500 mt-2">↑ 12% from last month</p>
					</div>
					<div class="bg-blue-100 rounded-lg p-3">
						<svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 12H9m6 0a6 6 0 1 1-12 0 6 6 0 0 1 12 0z"></path>
						</svg>
					</div>
				</div>
			</div>

			<!-- Active Class Sessions -->
			<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
				<div class="flex items-start justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Active Class Sessions</p>
						<h3 class="text-3xl font-bold text-green-600 mt-2">12</h3>
						<p class="text-xs text-gray-500 mt-2">Currently running now</p>
					</div>
					<div class="bg-green-100 rounded-lg p-3">
						<svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
						</svg>
					</div>
				</div>
			</div>

			<!-- Rooms in Use -->
			<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
				<div class="flex items-start justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Rooms in Use</p>
						<h3 class="text-3xl font-bold text-indigo-600 mt-2">8/15</h3>
						<p class="text-xs text-gray-500 mt-2">7 rooms idle</p>
					</div>
					<div class="bg-indigo-100 rounded-lg p-3">
						<svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0h-5.581m0 0H9.11m3.409 0H15.5m-3.409 0H7m8-6.5h-5"></path>
						</svg>
					</div>
				</div>
			</div>

			<!-- Today's Attendance Rate -->
			<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition">
				<div class="flex items-start justify-between">
					<div>
						<p class="text-gray-600 text-sm font-medium">Today's Attendance Rate</p>
						<h3 class="text-3xl font-bold text-amber-600 mt-2">94.2%</h3>
						<p class="text-xs text-gray-500 mt-2">↑ 2.1% from yesterday</p>
					</div>
					<div class="bg-amber-100 rounded-lg p-3">
						<svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>

		<!-- Live Attendance Overview and Room Activity Panel -->
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
			<!-- Live Attendance Overview -->
			<div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
				<h2 class="text-lg font-bold text-gray-800 mb-4">Live Attendance Overview</h2>
				<div class="space-y-3 max-h-80 overflow-y-auto">
					<!-- Session Card 1 -->
					<div class="border border-gray-200 rounded-lg p-4 hover:border-green-300 hover:bg-green-50 transition">
						<div class="flex justify-between items-start mb-3">
							<div>
								<h3 class="font-semibold text-gray-800">Mathematics - Calculus I</h3>
								<p class="text-sm text-gray-600">Prof. Johnson | Room A-201</p>
							</div>
							<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
								<span class="w-2 h-2 mr-1 bg-green-600 rounded-full animate-pulse"></span> Active
							</span>
						</div>
						<div class="flex justify-between items-center">
							<div class="text-sm text-gray-600">
								<span class="font-semibold text-green-600">45</span> Present |
								<span class="font-semibold text-amber-600">3</span> Late |
								<span class="font-semibold text-red-600">2</span> Absent
							</div>
							<div class="flex items-center gap-2">
								<svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-xs text-blue-600 font-medium">Geo-Fenced</span>
							</div>
						</div>
					</div>

					<!-- Session Card 2 -->
					<div class="border border-gray-200 rounded-lg p-4 hover:border-green-300 hover:bg-green-50 transition">
						<div class="flex justify-between items-start mb-3">
							<div>
								<h3 class="font-semibold text-gray-800">Physics - Mechanics</h3>
								<p class="text-sm text-gray-600">Prof. Chen | Room B-105</p>
							</div>
							<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
								<span class="w-2 h-2 mr-1 bg-green-600 rounded-full animate-pulse"></span> Active
							</span>
						</div>
						<div class="flex justify-between items-center">
							<div class="text-sm text-gray-600">
								<span class="font-semibold text-green-600">38</span> Present |
								<span class="font-semibold text-amber-600">1</span> Late |
								<span class="font-semibold text-red-600">1</span> Absent
							</div>
							<div class="flex items-center gap-2">
								<svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-xs text-blue-600 font-medium">Geo-Fenced</span>
							</div>
						</div>
					</div>

					<!-- Session Card 3 -->
					<div class="border border-gray-200 rounded-lg p-4 hover:border-green-300 hover:bg-green-50 transition">
						<div class="flex justify-between items-start mb-3">
							<div>
								<h3 class="font-semibold text-gray-800">English - Literature</h3>
								<p class="text-sm text-gray-600">Prof. Smith | Room C-312</p>
							</div>
							<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
								<span class="w-2 h-2 mr-1 bg-green-600 rounded-full animate-pulse"></span> Active
							</span>
						</div>
						<div class="flex justify-between items-center">
							<div class="text-sm text-gray-600">
								<span class="font-semibold text-green-600">42</span> Present |
								<span class="font-semibold text-amber-600">2</span> Late |
								<span class="font-semibold text-red-600">0</span> Absent
							</div>
							<div class="flex items-center gap-2">
								<svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
								</svg>
								<span class="text-xs text-gray-500 font-medium">No Validation</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Room Activity Panel -->
			<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
				<h2 class="text-lg font-bold text-gray-800 mb-4">Room Activity</h2>
				<div class="space-y-3">
					<!-- Room Occupied -->
					<div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-4 border-green-500">
						<div>
							<p class="font-semibold text-gray-800 text-sm">Room A-201</p>
							<p class="text-xs text-gray-600">Calculus I (Active)</p>
						</div>
						<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Occupied</span>
					</div>

					<!-- Room Occupied -->
					<div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-4 border-green-500">
						<div>
							<p class="font-semibold text-gray-800 text-sm">Room B-105</p>
							<p class="text-xs text-gray-600">Mechanics (Active)</p>
						</div>
						<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Occupied</span>
					</div>

					<!-- Room Idle -->
					<div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-4 border-gray-300">
						<div>
							<p class="font-semibold text-gray-800 text-sm">Room C-312</p>
							<p class="text-xs text-gray-600">Literature (Active)</p>
						</div>
						<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Occupied</span>
					</div>

					<!-- Room Scheduled -->
					<div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-4 border-blue-300">
						<div>
							<p class="font-semibold text-gray-800 text-sm">Room D-401</p>
							<p class="text-xs text-gray-600">Next: History (2:00 PM)</p>
						</div>
						<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Scheduled</span>
					</div>

					<!-- Room Idle -->
					<div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border-l-4 border-gray-300">
						<div>
							<p class="font-semibold text-gray-800 text-sm">Room E-220</p>
							<p class="text-xs text-gray-600">No sessions today</p>
						</div>
						<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-700">Idle</span>
					</div>
				</div>
			</div>
		</div>

		<!-- Recent Attendance Logs and Analytics Preview -->
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
			<!-- Recent Attendance Logs -->
			<div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
				<h2 class="text-lg font-bold text-gray-800 mb-4">Recent Attendance Events</h2>
				<div class="space-y-3 max-h-64 overflow-y-auto">
					<!-- Log Entry - Success -->
					<div class="flex items-start gap-3 pb-3 border-b border-gray-100">
						<div class="mt-1">
							<div class="w-2 h-2 bg-green-500 rounded-full"></div>
						</div>
						<div class="flex-1">
							<p class="text-sm font-medium text-gray-800">John Doe marked Present</p>
							<p class="text-xs text-gray-500">Calculus I - 10:32 AM | Location validated</p>
						</div>
					</div>

					<!-- Log Entry - Late -->
					<div class="flex items-start gap-3 pb-3 border-b border-gray-100">
						<div class="mt-1">
							<div class="w-2 h-2 bg-amber-500 rounded-full"></div>
						</div>
						<div class="flex-1">
							<p class="text-sm font-medium text-gray-800">Sarah Martinez marked Late</p>
							<p class="text-xs text-gray-500">Physics - 10:15 AM | 5 min late</p>
						</div>
					</div>

					<!-- Log Entry - Flagged -->
					<div class="flex items-start gap-3 pb-3 border-b border-gray-100">
						<div class="mt-1">
							<div class="w-2 h-2 bg-red-500 rounded-full"></div>
						</div>
						<div class="flex-1">
							<p class="text-sm font-medium text-gray-800">Michael Brown - Invalid Location</p>
							<p class="text-xs text-gray-500">Mathematics - 09:58 AM | Flagged for review</p>
						</div>
					</div>

					<!-- Log Entry - Success -->
					<div class="flex items-start gap-3 pb-3 border-b border-gray-100">
						<div class="mt-1">
							<div class="w-2 h-2 bg-green-500 rounded-full"></div>
						</div>
						<div class="flex-1">
							<p class="text-sm font-medium text-gray-800">Emma Wilson marked Present</p>
							<p class="text-xs text-gray-500">English Literature - 09:45 AM | Location validated</p>
						</div>
					</div>

					<!-- Log Entry - Success -->
					<div class="flex items-start gap-3">
						<div class="mt-1">
							<div class="w-2 h-2 bg-green-500 rounded-full"></div>
						</div>
						<div class="flex-1">
							<p class="text-sm font-medium text-gray-800">David Lee marked Present</p>
							<p class="text-xs text-gray-500">Chemistry - 09:30 AM | Location validated</p>
						</div>
					</div>
				</div>
				<button class="mt-4 w-full py-2 text-sm font-medium text-blue-600 hover:text-blue-700 hover:bg-blue-50 rounded-lg transition">View All Logs →</button>
			</div>

			<!-- Analytics Preview -->
			<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
				<h2 class="text-lg font-bold text-gray-800 mb-4">Analytics Preview</h2>
        
				<!-- Weekly Attendance Trend -->
				<div class="mb-6">
					<h3 class="text-sm font-semibold text-gray-700 mb-3">Weekly Attendance Trend</h3>
					<div class="flex items-end gap-2 h-24">
						<div class="flex-1 bg-blue-200 rounded-t-lg" style="height: 60%;"></div>
						<div class="flex-1 bg-blue-400 rounded-t-lg" style="height: 75%;"></div>
						<div class="flex-1 bg-blue-500 rounded-t-lg" style="height: 85%;"></div>
						<div class="flex-1 bg-blue-400 rounded-t-lg" style="height: 70%;"></div>
						<div class="flex-1 bg-blue-300 rounded-t-lg" style="height: 65%;"></div>
					</div>
					<div class="flex justify-between text-xs text-gray-500 mt-2">
						<span>Mon</span>
						<span>Tue</span>
						<span>Wed</span>
						<span>Thu</span>
						<span>Fri</span>
					</div>
				</div>

				<!-- Subject Performance -->
				<div>
					<h3 class="text-sm font-semibold text-gray-700 mb-3">Subject Performance</h3>
					<div class="space-y-2">
						<div class="flex justify-between items-center">
							<span class="text-xs text-gray-600">Mathematics</span>
							<span class="text-xs font-semibold text-green-600">96%</span>
						</div>
						<div class="w-full bg-gray-200 rounded-full h-2">
							<div class="bg-green-500 h-2 rounded-full" style="width: 96%;"></div>
						</div>
					</div>
					<div class="space-y-2 mt-3">
						<div class="flex justify-between items-center">
							<span class="text-xs text-gray-600">Physics</span>
							<span class="text-xs font-semibold text-green-600">94%</span>
						</div>
						<div class="w-full bg-gray-200 rounded-full h-2">
							<div class="bg-green-500 h-2 rounded-full" style="width: 94%;"></div>
						</div>
					</div>
					<div class="space-y-2 mt-3">
						<div class="flex justify-between items-center">
							<span class="text-xs text-gray-600">Chemistry</span>
							<span class="text-xs font-semibold text-amber-600">87%</span>
						</div>
						<div class="w-full bg-gray-200 rounded-full h-2">
							<div class="bg-amber-500 h-2 rounded-full" style="width: 87%;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Quick Actions Panel -->
		<div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-100 p-8">
			<h2 class="text-lg font-bold text-gray-800 mb-6">Quick Actions</h2>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
				<!-- Start Class Session -->
				<button class="flex flex-col items-center justify-center p-6 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-md transition group">
					<div class="bg-blue-100 rounded-lg p-3 mb-3 group-hover:bg-blue-200 transition">
						<svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 0 1-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
						</svg>
					</div>
					<p class="text-sm font-semibold text-gray-800">Start Class Session</p>
				</button>

				<!-- View Attendance Report -->
				<button class="flex flex-col items-center justify-center p-6 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-md transition group">
					<div class="bg-green-100 rounded-lg p-3 mb-3 group-hover:bg-green-200 transition">
						<svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zm0 0V9a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v10m-6 0a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2m0 0V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z"></path>
						</svg>
					</div>
					<p class="text-sm font-semibold text-gray-800">View Reports</p>
				</button>

				<!-- Manage Rooms -->
				<button class="flex flex-col items-center justify-center p-6 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-md transition group">
					<div class="bg-indigo-100 rounded-lg p-3 mb-3 group-hover:bg-indigo-200 transition">
						<svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0h-5.581m0 0H9.11m3.409 0H15.5m-3.409 0H7m8-6.5h-5"></path>
						</svg>
					</div>
					<p class="text-sm font-semibold text-gray-800">Manage Rooms</p>
				</button>

				<!-- Add Student -->
				<button class="flex flex-col items-center justify-center p-6 bg-white rounded-lg border border-gray-200 hover:border-blue-300 hover:shadow-md transition group">
					<div class="bg-amber-100 rounded-lg p-3 mb-3 group-hover:bg-amber-200 transition">
						<svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
						</svg>
					</div>
					<p class="text-sm font-semibold text-gray-800">Add Student</p>
				</button>
			</div>
		</div>
	</div>
</template>
