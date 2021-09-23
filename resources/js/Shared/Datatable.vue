<template>
    <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <th v-for="col in cols" :key="col" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{ col == '_download' ? '' : col }}
                </th>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr  v-for="row in rows"  :key="row">
                    <td v-for="(item, index) in row" :key="item" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{index == '_download' ? '':item}}
                     
                        <a v-if="index == '_download'" :href="item" class="text-indigo-600 hover:text-indigo-900">Download</a>

                    </td>
              
                    
                </tr>

                <!-- More people... -->
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    props: {
        rows: Array,
        cols: Array
    }

}
</script>

<style>

</style>