<template>
    <div class="bg-white">
    <div class="relative overflow-hidden">
        <main>
        <div class="pt-10 bg-green-800 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
            <div class="mx-auto max-w-7xl lg:px-8 pb-10">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                <div class="lg:py-24">
                    <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                    <span class="block">Seedlings</span> 
                    <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-yellow-400 sm:pb-5">Let your child smile everyday</span>
                    </h1>
                    <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">
                    Help your child mental state improve
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
                <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                    <!-- Add image -->
                </div>
                </div>
            </div>
            </div>
        </div>

      <!-- Testimonial section -->
     <!-- <div class="pb-16 bg-gradient-to-r from-teal-500 to-cyan-600 lg:pb-0 lg:z-10 lg:relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
          <div class="relative lg:-my-8">
            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
              <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                <img class="object-cover lg:h-full lg:w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
              </div>
            </div>
          </div>
          <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
              <blockquote>
                <div>
                  <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                  </svg>
                  <p class="mt-6 text-2xl font-medium text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.
                  </p>
                </div>
                <footer class="mt-6">
                  <p class="text-base font-medium text-white">Judith Black</p>
                  <p class="text-base font-medium text-cyan-100">CEO at PureInsights</p>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      -->

      <!-- Blog section -->
      <div class="relative bg-gray-50 py-16 sm:py-24 lg:py-32">
        <div class="relative">
          <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
              What we can do
            </p>
            <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">
              Kid, Parents, Therapist
            </p>
          </div>
          <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="/images/login_background.jpg" alt="">
              </div>
              <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                  <a href="#" class="block mt-2">
                    <p class="text-xl font-semibold text-gray-900">
                      Quiz
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                      balalala
                    </p>
                  </a>
                </div>

              </div>
            </div>

           <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="/images/login_background.jpg" alt="">
              </div>
              <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                  <a href="#" class="block mt-2">
                    <p class="text-xl font-semibold text-gray-900">
                      Feedback
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                      balalala
                    </p>
                  </a>
                </div>

              </div>
            </div>

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="/images/login_background.jpg" alt="">
              </div>
              <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                  <a href="#" class="block mt-2">
                    <p class="text-xl font-semibold text-gray-900">
                      Game
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                      balalala
                    </p>
                  </a>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="relative bg-green-100">
        <div class="relative h-56 bg-green-200 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
          <img class="w-full h-full object-cover" src="/images/home_sample_1.png" alt="">
          <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-r from-teal-500 to-cyan-600 mix-blend-multiply"></div>
        </div>
        <div class="relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:py-32">
          <div class="md:ml-auto md:w-1/2 md:pl-10">
            <h2 class="text-base font-semibold uppercase tracking-wider text-gray-300">
              
            </h2>
            <p class="mt-2 text-black text-3xl font-extrabold tracking-tight sm:text-4xl">
              Want to help
            </p>
            <p class="mt-3 text-lg text-gray-800">
              Are you interested in providing a mental health service?
            </p>
            <div class="mt-8">
              <div class="inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-50">
                  Join us
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    
  </div>
</div>

</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link
  }
}
</script>

<style>

</style>