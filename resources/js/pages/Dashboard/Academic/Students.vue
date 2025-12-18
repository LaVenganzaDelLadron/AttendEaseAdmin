<script setup lang="ts">
import Layout from '../Dashboard.vue'
import { ref } from 'vue'

const showStudentModal = ref(false)
const studentModalTitle = ref('')

const openStudentModal = (mode: string) => {
  studentModalTitle.value = mode === 'create' ? 'Enroll New Student' : 'Edit Student'
  showStudentModal.value = true
}

const closeStudentModal = () => {
  showStudentModal.value = false
}
</script>

<template>
  <Layout>
    <!-- Student List Page -->
    <div class="space-y-6">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Student Lists</h1>
        <p class="text-gray-600 text-sm mt-2">Manage student enrollments, track academic progress, and view attendance across courses</p>
      </div>

      <!-- Student Overview Statistics -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Students -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Total Students</p>
              <h3 class="text-3xl font-bold text-blue-600 mt-2">2,450</h3>
              <p class="text-xs text-gray-500 mt-2">Enrolled this term</p>
            </div>
            <div class="bg-blue-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 12H9m6 0a6 6 0 1 1-12 0 6 6 0 0 1 12 0z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- Active Enrollments -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Active Enrollments</p>
              <h3 class="text-3xl font-bold text-green-600 mt-2">2,340</h3>
              <p class="text-xs text-gray-500 mt-2">95.5% active status</p>
            </div>
            <div class="bg-green-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"></path>
              </svg>
            </div>
          </div>
        </div>

        <!-- At-Risk Students -->
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

        <!-- Average Attendance -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-gray-600 text-sm font-medium">Avg. Attendance</p>
              <h3 class="text-3xl font-bold text-purple-600 mt-2">91.3%</h3>
              <p class="text-xs text-gray-500 mt-2">↑ 1.8% from last week</p>
            </div>
            <div class="bg-purple-100 rounded-lg p-3">
              <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2zm0 0V9a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v10m-6 0a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2m0 0V5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2z"></path>
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
            <!-- Search by Student -->
            <div class="flex-1">
              <div class="relative">
                <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0z"></path>
                </svg>
                <input type="text" placeholder="Search by student name, ID, or email..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              </div>
            </div>

            <!-- Enroll Student Button -->
            <button @click="openStudentModal('create')" class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all font-medium flex items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Enroll Student
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
              <option value="transferred">Transferred</option>
              <option value="withdrawn">Withdrawn</option>
            </select>

            <!-- Filter by Attendance -->
            <select class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">All Attendance</option>
              <option value="excellent">Excellent (≥95%)</option>
              <option value="good">Good (85-94%)</option>
              <option value="fair">Fair (75-84%)</option>
              <option value="poor">Poor (&lt;75%)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Student List Table -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Student</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Email</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Course/Stream</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Enrollment Date</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Status</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Attendance</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Current Session</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <!-- Student Row 1 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-xs font-bold">AK</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Alex Kumar</p>
                      <p class="text-xs text-gray-500">STU-2024-001</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">alex.kumar@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Mathematics Stream</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Aug 2024</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-full bg-gray-200 rounded-full h-2 max-w-xs">
                      <div class="bg-green-600 h-2 rounded-full" style="width: 95%"></div>
                    </div>
                    <span class="text-xs font-semibold text-gray-700">95%</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-xs text-gray-600">Calculus I<br/>MAT-101</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="View Details">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                      </svg>
                    </button>
                    <button @click="openStudentModal('edit')" class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Student Row 2 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center text-white text-xs font-bold">SP</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Sophie Patel</p>
                      <p class="text-xs text-gray-500">STU-2024-045</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">sophie.patel@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Science Stream</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Aug 2024</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-full bg-gray-200 rounded-full h-2 max-w-xs">
                      <div class="bg-green-600 h-2 rounded-full" style="width: 88%"></div>
                    </div>
                    <span class="text-xs font-semibold text-gray-700">88%</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-xs text-gray-600">Modern Physics<br/>PHY-201</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="View Details">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                      </svg>
                    </button>
                    <button @click="openStudentModal('edit')" class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Student Row 3 - At Risk -->
              <tr class="hover:bg-gray-50 transition bg-red-50">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-red-500 to-pink-600 rounded-full flex items-center justify-center text-white text-xs font-bold">MJ</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Marcus Johnson</p>
                      <p class="text-xs text-gray-500">STU-2024-087</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">marcus.johnson@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Arts Stream</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Aug 2024</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">At Risk</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-full bg-gray-200 rounded-full h-2 max-w-xs">
                      <div class="bg-red-600 h-2 rounded-full" style="width: 62%"></div>
                    </div>
                    <span class="text-xs font-semibold text-red-700">62%</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-xs text-gray-600">English Literature<br/>ENG-301</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="View Details">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                      </svg>
                    </button>
                    <button @click="openStudentModal('edit')" class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>

              <!-- Student Row 4 -->
              <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white text-xs font-bold">NL</div>
                    <div>
                      <p class="text-sm font-semibold text-gray-900">Nina Leung</p>
                      <p class="text-xs text-gray-500">STU-2024-112</p>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">nina.leung@university.edu</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Science Stream</p>
                </td>
                <td class="px-6 py-4">
                  <p class="text-sm text-gray-600">Aug 2024</p>
                </td>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex items-center gap-2">
                    <div class="w-full bg-gray-200 rounded-full h-2 max-w-xs">
                      <div class="bg-green-600 h-2 rounded-full" style="width: 92%"></div>
                    </div>
                    <span class="text-xs font-semibold text-gray-700">92%</span>
                  </div>
                </td>
                <td class="px-6 py-4">
                  <p class="text-xs text-gray-600">Chemistry Lab<br/>CHM-102</p>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-2">
                    <button class="p-1.5 text-blue-600 hover:bg-blue-50 rounded transition" title="View Details">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                      </svg>
                    </button>
                    <button @click="openStudentModal('edit')" class="p-1.5 text-gray-600 hover:bg-gray-100 rounded transition" title="Edit">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
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
          <p class="text-sm text-gray-600">Showing <span class="font-semibold">1</span> to <span class="font-semibold">4</span> of <span class="font-semibold">2,450</span> students</p>
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
