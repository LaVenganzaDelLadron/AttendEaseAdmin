
<script setup lang="ts">
import { ref } from 'vue';
import Layout from '../Dashboard.vue'

const showCourseModal = ref(false);
const courseModalTitle = ref('Create New Course');

function openCourseModal(mode = 'create') {
	courseModalTitle.value = mode === 'create' ? 'Create New Course' : 'Edit Course';
	showCourseModal.value = true;
}

function closeCourseModal() {
	showCourseModal.value = false;
}
</script>

<template>
	<Layout>
		<!-- Courses Management Page -->
		<div class="space-y-6">
	<!-- Header -->
	<div class="mb-8">
		<h1 class="text-3xl font-bold text-gray-800">Courses Management</h1>
		<p class="text-gray-600 text-sm mt-2">Manage courses, subjects, and academic programs</p>
	</div>

	<!-- Course Overview Panel -->
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
		<!-- Total Courses -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
			<div class="flex items-start justify-between">
				<div>
					<p class="text-gray-600 text-sm font-medium">Total Courses</p>
					<h3 class="text-3xl font-bold text-gray-800 mt-2">48</h3>
					<p class="text-xs text-gray-500 mt-2">↑ 3 new this term</p>
				</div>
				<div class="bg-blue-100 rounded-lg p-3">
					<svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
					</svg>
				</div>
			</div>
		</div>

		<!-- Active Courses -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
			<div class="flex items-start justify-between">
				<div>
					<p class="text-gray-600 text-sm font-medium">Active Courses</p>
					<h3 class="text-3xl font-bold text-green-600 mt-2">44</h3>
					<p class="text-xs text-gray-500 mt-2">91.7% of total</p>
				</div>
				<div class="bg-green-100 rounded-lg p-3">
					<svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
					</svg>
				</div>
			</div>
		</div>

		<!-- Total Enrollments -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
			<div class="flex items-start justify-between">
				<div>
					<p class="text-gray-600 text-sm font-medium">Total Enrollments</p>
					<h3 class="text-3xl font-bold text-indigo-600 mt-2">1,230</h3>
					<p class="text-xs text-gray-500 mt-2">Avg: 27.95 per course</p>
				</div>
				<div class="bg-indigo-100 rounded-lg p-3">
					<svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 6h3a1 1 0 0 1 1 1v3h-4V7a1 1 0 0 1 0-1z"></path>
					</svg>
				</div>
			</div>
		</div>

		<!-- Assigned Teachers -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
			<div class="flex items-start justify-between">
				<div>
					<p class="text-gray-600 text-sm font-medium">Assigned Teachers</p>
					<h3 class="text-3xl font-bold text-amber-600 mt-2">42</h3>
					<p class="text-xs text-gray-500 mt-2">1.14 courses per teacher</p>
				</div>
				<div class="bg-amber-100 rounded-lg p-3">
					<svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
					</svg>
				</div>
			</div>
		</div>
	</div>

	<!-- Search and Filter Panel -->
	<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-6">
		<div class="flex flex-col lg:flex-row gap-4">
			<!-- Search Bar -->
			<div class="flex-1">
				<div class="relative">
					<svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"></path>
					</svg>
					<input type="text" placeholder="Search by course name or code..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
				</div>
			</div>

			<!-- Filter by Status -->
			<select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
				<option value="">All Status</option>
				<option value="active">Active</option>
				<option value="inactive">Inactive</option>
				<option value="archived">Archived</option>
			</select>

			<!-- Sort By -->
			<select class="px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
				<option value="">Sort By</option>
				<option value="name">Course Name (A-Z)</option>
				<option value="enrollment">Enrollment (High to Low)</option>
				<option value="recent">Recently Updated</option>
			</select>

			<!-- Add Course Button -->
			<button @click="openCourseModal('create')" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all font-medium flex items-center gap-2 whitespace-nowrap">
				<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
				</svg>
				Add Course
			</button>
		</div>
	</div>

	<!-- Courses Grid -->
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
		<!-- Course Card 1 -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
			<div class="h-2 bg-gradient-to-r from-blue-500 to-blue-600"></div>
			<div class="p-6">
				<!-- Course Header -->
				<div class="flex items-start justify-between mb-4">
					<div>
						<h3 class="text-lg font-bold text-gray-900">Mathematics 101</h3>
						<p class="text-xs text-gray-500 font-mono mt-1">MAT-101</p>
					</div>
					<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
				</div>

				<!-- Course Info -->
				<div class="space-y-3 mb-4">
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
						</svg>
						<p class="text-sm text-gray-600">Prof. Sarah Martinez</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 6h3a1 1 0 0 1 1 1v3h-4V7a1 1 0 0 1 0-1z"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">32</span> Students Enrolled</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">3</span> Subjects</p>
					</div>
				</div>

				<!-- Actions -->
				<div class="flex gap-2 pt-4 border-t border-gray-200">
					<button @click="openCourseModal('edit')" class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition text-sm font-medium">Edit</button>
					<button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition text-sm font-medium">View Details</button>
				</div>
			</div>
		</div>

		<!-- Course Card 2 -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
			<div class="h-2 bg-gradient-to-r from-green-500 to-emerald-600"></div>
			<div class="p-6">
				<!-- Course Header -->
				<div class="flex items-start justify-between mb-4">
					<div>
						<h3 class="text-lg font-bold text-gray-900">Physics 201</h3>
						<p class="text-xs text-gray-500 font-mono mt-1">PHY-201</p>
					</div>
					<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
				</div>

				<!-- Course Info -->
				<div class="space-y-3 mb-4">
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
						</svg>
						<p class="text-sm text-gray-600">Prof. Emma Wilson</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 6h3a1 1 0 0 1 1 1v3h-4V7a1 1 0 0 1 0-1z"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">28</span> Students Enrolled</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">2</span> Subjects</p>
					</div>
				</div>

				<!-- Actions -->
				<div class="flex gap-2 pt-4 border-t border-gray-200">
					<button @click="openCourseModal('edit')" class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition text-sm font-medium">Edit</button>
					<button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition text-sm font-medium">View Details</button>
				</div>
			</div>
		</div>

		<!-- Course Card 3 -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
			<div class="h-2 bg-gradient-to-r from-amber-500 to-orange-600"></div>
			<div class="p-6">
				<!-- Course Header -->
				<div class="flex items-start justify-between mb-4">
					<div>
						<h3 class="text-lg font-bold text-gray-900">Chemistry 102</h3>
						<p class="text-xs text-gray-500 font-mono mt-1">CHM-102</p>
					</div>
					<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Inactive</span>
				</div>

				<!-- Course Info -->
				<div class="space-y-3 mb-4">
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
						</svg>
						<p class="text-sm text-gray-600">Prof. Michael Chen</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 6h3a1 1 0 0 1 1 1v3h-4V7a1 1 0 0 1 0-1z"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">24</span> Students Enrolled</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">4</span> Subjects</p>
					</div>
				</div>

				<!-- Actions -->
				<div class="flex gap-2 pt-4 border-t border-gray-200">
					<button @click="openCourseModal('edit')" class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition text-sm font-medium">Edit</button>
					<button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition text-sm font-medium">View Details</button>
				</div>
			</div>
		</div>

		<!-- Course Card 4 -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
			<div class="h-2 bg-gradient-to-r from-pink-500 to-rose-600"></div>
			<div class="p-6">
				<!-- Course Header -->
				<div class="flex items-start justify-between mb-4">
					<div>
						<h3 class="text-lg font-bold text-gray-900">English Literature</h3>
						<p class="text-xs text-gray-500 font-mono mt-1">ENG-301</p>
					</div>
					<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
				</div>

				<!-- Course Info -->
				<div class="space-y-3 mb-4">
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
						</svg>
						<p class="text-sm text-gray-600">Prof. James Anderson</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 6h3a1 1 0 0 1 1 1v3h-4V7a1 1 0 0 1 0-1z"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">35</span> Students Enrolled</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">5</span> Subjects</p>
					</div>
				</div>

				<!-- Actions -->
				<div class="flex gap-2 pt-4 border-t border-gray-200">
					<button @click="openCourseModal('edit')" class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition text-sm font-medium">Edit</button>
					<button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition text-sm font-medium">View Details</button>
				</div>
			</div>
		</div>

		<!-- Course Card 5 -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
			<div class="h-2 bg-gradient-to-r from-cyan-500 to-blue-600"></div>
			<div class="p-6">
				<!-- Course Header -->
				<div class="flex items-start justify-between mb-4">
					<div>
						<h3 class="text-lg font-bold text-gray-900">History 150</h3>
						<p class="text-xs text-gray-500 font-mono mt-1">HIS-150</p>
					</div>
					<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
				</div>

				<!-- Course Info -->
				<div class="space-y-3 mb-4">
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
						</svg>
						<p class="text-sm text-gray-600">Prof. Helen White</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 6h3a1 1 0 0 1 1 1v3h-4V7a1 1 0 0 1 0-1z"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">31</span> Students Enrolled</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">3</span> Subjects</p>
					</div>
				</div>

				<!-- Actions -->
				<div class="flex gap-2 pt-4 border-t border-gray-200">
					<button @click="openCourseModal('edit')" class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition text-sm font-medium">Edit</button>
					<button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition text-sm font-medium">View Details</button>
				</div>
			</div>
		</div>

		<!-- Course Card 6 -->
		<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
			<div class="h-2 bg-gradient-to-r from-violet-500 to-purple-600"></div>
			<div class="p-6">
				<!-- Course Header -->
				<div class="flex items-start justify-between mb-4">
					<div>
						<h3 class="text-lg font-bold text-gray-900">Computer Science</h3>
						<p class="text-xs text-gray-500 font-mono mt-1">CS-201</p>
					</div>
					<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
				</div>

				<!-- Course Info -->
				<div class="space-y-3 mb-4">
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
						</svg>
						<p class="text-sm text-gray-600">Prof. David Kumar</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 0 0-5.856-1.487M15 6h3a1 1 0 0 1 1 1v3h-4V7a1 1 0 0 1 0-1z"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">40</span> Students Enrolled</p>
					</div>
					<div class="flex items-center gap-2">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
						</svg>
						<p class="text-sm text-gray-600"><span class="font-semibold text-gray-900">6</span> Subjects</p>
					</div>
				</div>

				<!-- Actions -->
				<div class="flex gap-2 pt-4 border-t border-gray-200">
					<button @click="openCourseModal('edit')" class="flex-1 px-3 py-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition text-sm font-medium">Edit</button>
					<button class="flex-1 px-3 py-2 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 transition text-sm font-medium">View Details</button>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- Create/Edit Course Modal -->
	<div id="courseModal" v-show="showCourseModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
	<div class="bg-white rounded-xl shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
		<!-- Modal Header -->
		<div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-4 flex items-center justify-between">
			<h2 class="text-lg font-bold text-white" id="courseModalTitle">{{ courseModalTitle }}</h2>
			<button @click="closeCourseModal" class="text-white hover:text-gray-200 transition">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
				</svg>
			</button>
		</div>

		<!-- Modal Content -->
		<form @submit.prevent class="p-6 space-y-6">
			<!-- Basic Information -->
			<div>
				<h3 class="text-sm font-semibold text-gray-900 mb-4">Basic Information</h3>
				<div class="grid grid-cols-2 gap-4">
					<!-- Course Name -->
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Course Name</label>
						<input type="text" placeholder="e.g., Mathematics 101" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
					</div>

					<!-- Course Code -->
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Course Code</label>
						<input type="text" placeholder="e.g., MAT-101" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
					</div>
				</div>
			</div>

			<!-- Course Setup -->
			<div>
				<h3 class="text-sm font-semibold text-gray-900 mb-4">Course Setup</h3>
				<div class="grid grid-cols-2 gap-4">
					<!-- Assigned Teacher -->
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Assign Teacher</label>
						<select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
							<option>Select Teacher</option>
							<option>Prof. Sarah Martinez</option>
							<option>Prof. Emma Wilson</option>
							<option>Prof. Michael Chen</option>
						</select>
					</div>

					<!-- Status -->
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
						<select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
							<option>Active</option>
							<option>Inactive</option>
							<option>Archived</option>
						</select>
					</div>
				</div>
			</div>

			<!-- Enrollment Details -->
			<div>
				<h3 class="text-sm font-semibold text-gray-900 mb-4">Enrollment Details</h3>
				<div class="grid grid-cols-2 gap-4">
					<!-- Enrollment Limit -->
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Enrollment Limit (optional)</label>
						<input type="number" placeholder="Leave empty for unlimited" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
					</div>

					<!-- Current Enrollment -->
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Current Enrollment</label>
						<input type="number" placeholder="0" disabled class="w-full px-4 py-2.5 border border-gray-300 rounded-lg bg-gray-50 text-gray-600">
					</div>
				</div>
			</div>

			<!-- Linked Subjects -->
			<div>
				<h3 class="text-sm font-semibold text-gray-900 mb-4">Link Subjects</h3>
				<div class="space-y-2">
					<label class="flex items-center gap-3">
						<input type="checkbox" checked class="rounded border-gray-300">
						<span class="text-sm text-gray-700">Calculus I</span>
					</label>
					<label class="flex items-center gap-3">
						<input type="checkbox" class="rounded border-gray-300">
						<span class="text-sm text-gray-700">Linear Algebra</span>
					</label>
					<label class="flex items-center gap-3">
						<input type="checkbox" class="rounded border-gray-300">
						<span class="text-sm text-gray-700">Discrete Mathematics</span>
					</label>
				</div>
			</div>

			<!-- Modal Actions -->
			<div class="flex gap-3 pt-4 border-t border-gray-200">
				<button type="button" @click="closeCourseModal" class="flex-1 px-4 py-2.5 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition font-medium">Cancel</button>
				<button type="submit" class="flex-1 px-4 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">Save Course</button>
			</div>
		</form>
	</div>
		</div>
	</Layout>
</template>
