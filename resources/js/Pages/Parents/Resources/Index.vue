<template>
    <Layout class="bg-gradient-to-b from-parent-300 to-blueGray">
        <!-- <div class="bg-green-200 h-48"></div> -->
        <div class="container mx-auto mt-12 ">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <!-- Main 3 column grid -->
                <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8 pb-24">
                    <!-- Left column -->
                    <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                        <!-- Welcome panel -->
                        <section aria-labelledby="profile-overview-title">
                            <div class="rounded-lg bg-white overflow-hidden shadow">
                            <div class="bg-white p-6">
                                <div class="sm:flex sm:items-center sm:justify-between">
                                <div class="sm:flex sm:space-x-5">
                                    <div class="flex-shrink-0">
                                    <img class="mx-auto h-32 w-auto" src="https://brewarrina-c.schools.nsw.gov.au/content/dam/doe/sws/schools/b/brewarrina-c/localcontent/digital_tree_transparent.gif" alt="">
                                    </div>
                                    <div class="mt-6 text-center sm:mt-6 sm:pt-1 sm:text-left">
                                        <p class="text-3xl font-bold text-gray-900 sm:text-3xl">Welcome to Resources!</p>
                                        <p class="text-xl font-medium text-gray-600"> Search for well documented help and information curated by our lovely doctors ! </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>

                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="">
                                <!-- Content goes here -->
                                <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700">
                                    Most useful resources
                                </div>
                                <hr class=" mx-4 "/>

                                <ResourceContainer v-for="(resource, index) in top_resources" :key="index" :resource="resource" />
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow rounded-lg">
                            <div class="">
                                <!-- Content goes here -->
                                <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700">
                                    Search for resources
                                </div>
                                <hr class=" mx-4 "/>

                                <input v-model="searchText" placeholder="Search for resources" class="shadow rounded-md py-2 w-11/12 mx-0 lg:mx-3 px-2 mb-2 outline-none focus:ring-2 mt-1 focus:ring-parent-600" />

                                <ResourceContainer v-for="(resource, index) in searched" :key="index" :resource="resource" />
                                <div class="py-80">

                                </div>
                            </div>
                        </div>
                
                    </div>

                    <!-- Right column -->
                    <div class="grid grid-cols-1 gap-4">

                    <!-- Recent Hires -->
                    <section class="sticky top-0">
                        <div class="h-full">
                            <div class="h-64 w-96 rounded-lg bg-white shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
                                <div class="px-4 py-5 sm:p-6 sm:pb-4 text-xl font-bold text-gray-700">
                                    Ask for Help
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
