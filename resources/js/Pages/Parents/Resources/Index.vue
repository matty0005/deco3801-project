<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <div class="container mx-auto mt-12 ">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <!-- Main 3 column grid -->
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <!-- Left column -->
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                        <!-- Welcome panel -->
                        <section aria-labelledby="profile-overview-title">
                            <div class="bg-white overflow-visible shadow rounded-lg relative">
                                <div class="px-4 pt-2 sm:pt-5 sm:p-6 sm:pb-0  flex flex-col">
                                    <div class="flex flex-col justify-start">
                                        <div class="px-2 sm:px-4 pt-4 pb-2 text-3xl font-semibold">
                                            <p class="text-gray-700">Resources</p>
                                        </div>
                                    </div>
                                    <div class="px-2 sm:px-4 mt-4 mb-4 text-sm text-gray-600">
                                        Find and access articles regarding mental health curated by our specialists.
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="bg-white overflow-visible shadow rounded-lg relative">
                            <div class="px-4 pt-2 sm:pt-5 sm:p-6 sm:pb-0  flex flex-col">
                                <div class="">
                                    <div class="flex flex-col justify-start sm:flex-row">
                                        <div class="px-2 sm:px-4 pt-4 pb-2 sm:text-2xl text-3xl font-medium">
                                            <p class="text-gray-700">Find Resources</p>
                                        </div>

                                        <div class="px-2 sm:px-4 sm:p-2 self-start sm:self-center sm:ml-auto flex flex-col relative w-full sm:w-8/12">
                                            <input v-model="searchText" placeholder="Search for resources..." class="text-sm sm:text-base border-2 border-parent-500 rounded-md py-2 w-full mx-0 lg:mx-auto px-2 mb-2 outline-none focus:ring-1 sm:focus:ring-2 mt-1 focus:ring-parent-600"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-2 sm:px-4 mt-2 mb-4 text-sm text-gray-500">
                                    View the most popular and helpful articles about various mental health and parenting topics, or search for specific resources with the search bar.
                                </div>
                            </div>                                

                            <div v-if="searched[0] !=null" class="flex flex-col">
                                <ResourceContainer v-for="(resource, index) in searched" :key="index" :resource="resource" />   
                            </div>

                            <div v-else-if="searchText==''" class="flex flex-col">
                                <ResourceContainer v-for="(resource, index) in top_resources" :key="index" :resource="resource" />
                            </div>

                            <div v-else class="mx-3 border border-l-0 border-r-0 border-b-0 border-gray-300 mb-3 flex flex-col">
                                <p class="px-4 pt-2 sm:px-6 text-gray-600 text-base">
                                    No articles matching search title.
                                </p>
                            </div>
                            <div class="py-1"></div>
                            </div>
                        </div>                        

                    <!-- Right column -->
                    <div class="grid grid-cols-1 gap-4 lg:col-span-1">

                        <section aria-labelledby="recent-hires-title">
                            <div class="rounded-lg bg-white overflow-hidden shadow">
                            <div class="p-6">
                                <h2 class="text-base font-medium text-gray-900">Quick Links</h2>
                                <div class="flow-root mt-6">
                                <ul class="-my-5 divide-y divide-gray-200">
                                    <div class="flex flex-col space-x-4">
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Hi
                                        </p>
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Hi
                                        </p>
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Hi
                                        </p>
                                        <p class="text-sm font-medium text-gray-900 truncate">
                                            Hi
                                        </p>
                                    </div>
                                </ul>
                                </div>
                                <div class="mt-6">
                                <a href="#" class="w-full flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    View all
                                </a>
                                </div>
                            </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/AppLayout'
import ResourceContainer from './ResourceContainer'

export default {
    components: {
        Layout,
        ResourceContainer,
    },

    props: {
        top_resources: Array,
        searched: Array,
    },

    data() {
        return {
            searchText: '',
        }
    },
    
    watch: {
        searchText() {
            if ('URLSearchParams' in window) {
                var searchParams = new URLSearchParams(window.location.search);
                searchParams.set("search", this.searchText);

                if (this.searchText == '' ||  this.searchText == null) {
                    searchParams.delete('search')
                } 

                var newRelativePathQuery = window.location.pathname + '?' + searchParams.toString();
                history.pushState(null, '', newRelativePathQuery);
                this.$inertia.reload({ only: ['searched'] })
            }
        },
    },
}
</script>
