<template>
  <layout>
    <div class="bg-white">
      <div class="relative overflow-hidden">
          <main>
          <div class="pt-5 bg-green-800 sm:pt-8 lg:pt-4 lg:pb-0 lg:overflow-hidden">
              <div class="mx-auto max-w-7xl lg:px-8">
              <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                  <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                    <div class="lg:py-12">
                        <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                        <span class="block">Seedlings</span> 
                        <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-yellow-400 sm:pb-5">
                          Help your child grow
                        </span>
                        </h1>
                        <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                          Support your child's mental development 
                        </p>
                        <div class="mt-10 mb-5 sm:mt-12">
                        <div class="sm:max-w-xl sm:mx-auto lg:mx-0">
                            <div class="sm:flex-1">
                            <div class="mt-3 sm:mt-0 sm:ml-3  w-full lg:w-2/3 ">
                                <Link :href="route('register')" class="flex block w-full py-3 px-4 mt-3 rounded-md shadow bg-gradient-to-r from-teal-500 to-cyan-600 text-white font-medium hover:from-teal-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">
                                  <div class="mx-auto">
                                    Sign up
                                  </div>
                                </Link>
                                <p class="text-base text-gray-100 sm:text-lg lg:text-base xl:text-lg py-3 mb-5">
                                  Already have an account? 
                                  <a :href="route('login')" class="inline-flex items-center px-2 py-2 border border-transparent text-base font-medium rounded-md text-white" >
                                    Log in here!
                                  </a>
                                </p>  
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>
                  <div class="mt-16 -mb-16 sm:-mb-48 lg:m-0 lg:relative flex">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0 self-end">
                        <!-- Add image -->
                        <img class="mt-20 shadow-lg" src="/images/kids_dashboard.png"/>
                    </div>
                  </div>
              </div>
              </div>
          </div>

           <!-- Feature section with screenshot -->
          <div class="relative bg-gray-50 pt-16 sm:pt-24 lg:pt-32">
            <div class="mx-auto max-w-md px-4 text-center sm:px-6 sm:max-w-3xl lg:px-8 lg:max-w-7xl">
              <div>
                <h2 class="text-base font-semibold tracking-wider text-cyan-600 uppercase">Centralised</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                  Assist your child's mental health needs.
                </p>
                <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                With the capability to book comprehensive consultations and access a leading community forum for mental health discussion.                 </p>
              </div>
              <div class="mt-12 -mb-10 sm:-mb-24 lg:-mb-80">
                <!-- <img class="rounded-lg shadow-xl ring-1 ring-black ring-opacity-5" src="https://tailwindui.com/img/component-images/green-project-app-screenshot.jpg" alt=""> -->
                <img class="rounded-lg shadow-xl ring-1 ring-black ring-opacity-5" src="/images/parents_dashboard.png" alt="">

              </div>
            </div>
          </div>



       
    <!-- Gradient Feature Section -->
          <div class="bg-gradient-to-r from-parent-700 to-parent-500 relative bg-gray-50 py-16 sm:py-24 lg:py-32">
            <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
              <h2 class="text-3xl font-extrabold text-white tracking-tight">
                Built with people like you in mind.
              </h2>
              <p class="mt-4 max-w-3xl text-lg text-purple-200">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis. Blandit aliquam sit nisl euismod mattis in.
              </p>
              <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">



                <div v-for="feature in features" :key="feature">
                  <div>
                    <span class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10">
                      <!-- Heroicon name: outline/inbox -->
                      <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="none" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="feature.icon" />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">{{ feature.title }}</h3>
                    <p class="mt-2 text-base text-purple-200">
                      {{ feature.summary }}
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </main>
      
    </div>
  </div>
  </layout>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import Layout from "@/Layouts/PublicAppLayout"
export default {
  components: {
    Link,
    Layout
  },
  data: () => {
    return {
      features: [
        {
          'icon': "M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z",
          'title': 'Book consulations',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        },
        {
          'icon': "M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z",
          'title': 'Community forum',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        },
        {
          'icon': "M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z",
          'title': 'Indepth Resouces',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        },
        {
          'icon': "M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z",
          'title': 'Covert Kids Mode',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        },
        {
          'icon': "M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z",
          'title': 'Pre-consult questionnaire',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        },
        {
          'icon': "M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z",
          'title': 'Post-consult checkup',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        },
        {
          'icon': "M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z",
          'title': 'Keep track of your kid',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        }
        ,{
          'icon': "M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4",
          'title': 'Effective',
          'summary': 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.'
        }
      ]
    }
  }
}
</script>

<style>

</style>