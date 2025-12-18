<script setup lang="ts">
import Layout from '../Dashboard.vue'
import { ref } from 'vue'

const showSubjectModal = ref(false)
const subjectModalTitle = ref('')

const openSubjectModal = (mode: string) => {
  subjectModalTitle.value = mode === 'create' ? 'Add New Subject' : 'Edit Subject'
  showSubjectModal.value = true
}

const closeSubjectModal = () => {
  showSubjectModal.value = false
}
</script>

<template>
  <Layout>
    <!-- Subjects Management Page -->
    <div class="space-y-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Subjects</h1>
        <p class="text-gray-600 text-sm mt-2">Organize and manage all academic subjects across courses with teacher assignments</p>
      </div>

      <!-- Subjects Overview Statistics -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Subjects -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Total Subjects</p>
              <h3 class="text-3xl font-bold text-blue-600 mt-2">156</h3>
              <p class="text-xs text-gray-500 mt-2">Across all courses</p>
            </div>
            <div class="bg-blue-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747m0-13c5.5 0 10 4.745 10 10.747S17.5 27.747 12 27.747M12 6.253v13"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Active Subjects -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Active Subjects</p>
              <h3 class="text-3xl font-bold text-green-600 mt-2">148</h3>
              <p class="text-xs text-gray-500 mt-2">94.9% of total</p>
            </div>
            <div class="bg-green-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Teacher Assignments -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Teacher Assignments</p>
              <h3 class="text-3xl font-bold text-purple-600 mt-2">142</h3>
              <p class="text-xs text-gray-500 mt-2">Avg 1.1 per subject</p>
            </div>
            <div class="bg-purple-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM3 20a6 6 0 0 1 12 0v1H3v-1z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Unassigned Subjects -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Unassigned</p>
              <h3 class="text-3xl font-bold text-amber-600 mt-2">6</h3>
              <p class="text-xs text-gray-500 mt-2">Require teacher assignment</p>
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
            <!-- Search by Subject -->
            <div class="flex-1">
              <div class="relative">
                <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"></path>
                </svg>
                <input type="text" placeholder="Search by subject name or code..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              </div>
            </div>

            <!-- Add Subject Button -->
            <button class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all font-medium flex items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Add Subject
            </button>
          </div>

          <!-- Second Row -->
          <div class="flex flex-col lg:flex-row gap-4">
            <!-- Filter by Course -->
            <select class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Courses</option>
              <option value="mat">Mathematics Stream</option>
              <option value="sci">Science Stream</option>
              <option value="arts">Arts Stream</option>
              <option value="com">Commerce Stream</option>
            </select>

            <!-- Filter by Status -->
            <select class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Status</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
              <option value="archived">Archived</option>
            </select>

            <!-- Filter by Assignment -->
            <select class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Assignments</option>
              <option value="assigned">Assigned to Teacher</option>
              <option value="unassigned">Unassigned</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Subjects Table -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Subject</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Course</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Teacher</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Credit Hours</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Status</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Students</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Sessions</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <!-- Subject Row 1 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div>
                    <p class="text-sm font-semibold text-gray-900">Calculus I</p>
                    <p class="text-xs text-gray-500 font-mono">MAT-101</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Mathematics Stream</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-xs font-bold">SM</div>
                    <p class="text-sm text-gray-600">Sarah Martinez</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">4.0</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">145</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">48</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                    <button class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Subject Row 2 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div>
                    <p class="text-sm font-semibold text-gray-900">Modern Physics</p>
                    <p class="text-xs text-gray-500 font-mono">PHY-201</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Science Stream</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white text-xs font-bold">EW</div>
                    <p class="text-sm text-gray-600">Emma Wilson</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">3.5</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">128</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">44</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                    <button class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Subject Row 3 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div>
                    <p class="text-sm font-semibold text-gray-900">English Literature</p>
                    <p class="text-xs text-gray-500 font-mono">ENG-301</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Arts Stream</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center text-white text-xs font-bold">JA</div>
                    <p class="text-sm text-gray-600">James Anderson</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">3.0</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">156</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">52</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                    <button class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Subject Row 4 - Unassigned -->
              <tr class="hover:bg-gray-50 transition bg-amber-50">
                <td class="px-6 py-4">
                  <div>
                    <p class="text-sm font-semibold text-gray-900">Business Studies</p>
                    <p class="text-xs text-gray-500 font-mono">COM-201</p>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Commerce Stream</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">Unassigned</span>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">3.0</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">98</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm font-semibold text-gray-900">32</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="px-2 py-1 text-xs bg-amber-600 text-white rounded hover:bg-amber-700 transition">Assign</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 border-t border-gray-200 px-6 py-4 flex items-center justify-between">
          <p class="text-sm text-gray-600">Showing <span class="font-semibold">1</span> to <span class="font-semibold">4</span> of <span class="font-semibold">156</span> subjects</p>
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
