<script setup lang="ts">
import Layout from '../Dashboard.vue'
import { ref } from 'vue'

const showTeacherModal = ref(false)
const teacherModalTitle = ref('')

const openTeacherModal = (mode: string) => {
  teacherModalTitle.value = mode === 'create' ? 'Add New Teacher' : 'Edit Teacher'
  showTeacherModal.value = true
}

const closeTeacherModal = () => {
  showTeacherModal.value = false
}
</script>

<template>
  <Layout>
    <div class="space-y-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Teachers</h1>
        <p class="text-gray-600 text-sm mt-2">Manage teacher assignments, track academic load, and oversee instructional responsibilities</p>
      </div>

      <!-- Teachers Overview Statistics -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Teachers -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Total Teachers</p>
              <h3 class="text-3xl font-bold text-blue-600 mt-2">127</h3>
              <p class="text-xs text-gray-500 mt-2">Active faculty</p>
            </div>
            <div class="bg-blue-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Subjects Assigned -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Subjects Assigned</p>
              <h3 class="text-3xl font-bold text-green-600 mt-2">156</h3>
              <p class="text-xs text-gray-500 mt-2">Avg 1.23 per teacher</p>
            </div>
            <div class="bg-green-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Courses Covered -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Courses Covered</p>
              <h3 class="text-3xl font-bold text-purple-600 mt-2">48</h3>
              <p class="text-xs text-gray-500 mt-2">All academic programs</p>
            </div>
            <div class="bg-purple-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Students Under Instruction -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Students Under Instruction</p>
              <h3 class="text-3xl font-bold text-indigo-600 mt-2">2,450</h3>
              <p class="text-xs text-gray-500 mt-2">Avg 19.3 per teacher</p>
            </div>
            <div class="bg-indigo-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 12H9m6 0a6 6 0 1 1-12 0 6 6 0 0 1 12 0z"></path>
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
            <!-- Search by Teacher -->
            <div class="flex-1">
              <div class="relative">
                <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"></path>
                </svg>
                <input type="text" placeholder="Search by teacher name, ID, or email..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              </div>
            </div>

            <!-- Add Teacher Button -->
            <button @click="openTeacherModal('create')" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all font-medium flex items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Add Teacher
            </button>
          </div>

          <!-- Second Row -->
          <div class="flex flex-col lg:flex-row gap-4">
            <!-- Filter by Department -->
            <select class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Departments</option>
              <option value="mathematics">Mathematics</option>
              <option value="science">Science</option>
              <option value="arts">Arts & Literature</option>
              <option value="commerce">Commerce</option>
            </select>

            <!-- Filter by Status -->
            <select class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Status</option>
              <option value="active">Active</option>
              <option value="onleave">On Leave</option>
              <option value="retired">Retired</option>
            </select>

            <!-- Filter by Specialization -->
            <select class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Specializations</option>
              <option value="calculus">Calculus</option>
              <option value="physics">Physics</option>
              <option value="literature">Literature</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Teachers Table -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Teacher</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Email</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Department</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Subjects Assigned</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Courses</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Student Load</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Status</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <!-- Teacher Row 1 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-xs font-bold">SM</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Sarah Martinez</p>
                      <p class="text-xs text-gray-500">TEA-2020-001</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">sarah.martinez@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Mathematics</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex flex-wrap gap-1">
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-50 text-blue-700">Calculus I</span>
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-50 text-blue-700">Linear Algebra</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Math Stream (A, B)</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center justify-between">
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                      <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                    <span class="text-xs font-semibold text-gray-700 ml-2">165</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button @click="openTeacherModal('edit')" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                    <button class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="View Profile">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Teacher Row 2 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white text-xs font-bold">EW</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Emma Wilson</p>
                      <p class="text-xs text-gray-500">TEA-2019-045</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">emma.wilson@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Science</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex flex-wrap gap-1">
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-green-50 text-green-700">Modern Physics</span>
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-green-50 text-green-700">Mechanics</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Science Stream (A, C)</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center justify-between">
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                      <div class="bg-green-600 h-2 rounded-full" style="width: 68%"></div>
                    </div>
                    <span class="text-xs font-semibold text-gray-700 ml-2">142</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button @click="openTeacherModal('edit')" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                    <button class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="View Profile">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Teacher Row 3 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center text-white text-xs font-bold">JA</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">James Anderson</p>
                      <p class="text-xs text-gray-500">TEA-2021-087</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">james.anderson@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Arts & Literature</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex flex-wrap gap-1">
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-pink-50 text-pink-700">English Literature</span>
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-pink-50 text-pink-700">Writing Seminar</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Arts Stream (B, D)</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center justify-between">
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                      <div class="bg-pink-600 h-2 rounded-full" style="width: 82%"></div>
                    </div>
                    <span class="text-xs font-semibold text-gray-700 ml-2">178</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button @click="openTeacherModal('edit')" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                    <button class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="View Profile">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Teacher Row 4 - On Leave -->
              <tr class="hover:bg-gray-50 transition bg-amber-50">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center text-white text-xs font-bold">MC</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Michael Chen</p>
                      <p class="text-xs text-gray-500">TEA-2018-112</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">michael.chen@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Science</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex flex-wrap gap-1">
                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-orange-50 text-orange-700">Chemistry Fundamentals</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Science Stream (C)</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center justify-between">
                    <div class="w-16 bg-gray-200 rounded-full h-2">
                      <div class="bg-gray-400 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                    <span class="text-xs font-semibold text-gray-700 ml-2">98</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">On Leave</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button @click="openTeacherModal('edit')" class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                    <button class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="View Profile">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 border-t border-gray-200 px-6 py-4 flex items-center justify-between">
          <p class="text-sm text-gray-600">Showing <span class="font-semibold">1</span> to <span class="font-semibold">4</span> of <span class="font-semibold">127</span> teachers</p>
          <div class="flex gap-2">
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">Previous</button>
            <button class="px-3 py-2 bg-blue-600 text-white rounded-lg text-sm hover:bg-blue-700 transition">1</button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">2</button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">3</button>
            <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100 transition">Next</button>
          </div>
        </div>
      </div>

      <!-- Teacher Modal -->
      <div v-show="showTeacherModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
          <h2 class="text-xl font-bold text-gray-900 mb-4">{{ teacherModalTitle }}</h2>
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
              <input type="text" placeholder="Enter teacher name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input type="email" placeholder="Enter email address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Department</label>
              <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Department</option>
                <option value="mathematics">Mathematics</option>
                <option value="science">Science</option>
                <option value="arts">Arts & Literature</option>
                <option value="commerce">Commerce</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
              <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Status</option>
                <option value="active">Active</option>
                <option value="onleave">On Leave</option>
                <option value="retired">Retired</option>
              </select>
            </div>
          </div>
          <div class="mt-6 flex gap-3">
            <button @click="closeTeacherModal" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition font-medium">Cancel</button>
            <button class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium">Save</button>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>
