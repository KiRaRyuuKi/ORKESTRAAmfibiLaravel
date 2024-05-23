<x-app-layout>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
        <div class="bg-white p-3 rounded-lg dark:bg-gray-900">
            <h5 class="self-center text-xl p-1 font-semibold whitespace-nowrap dark:text-white">Pie Chart</h5>

            <!-- Pie Chart -->
            <div id="pieChart" style="min-height: 575px;" class="echart">
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#pieChart")).setOption({
                        tooltip: {
                            trigger: 'item'
                        },
                        legend: {
                            orient: 'vertical',
                            left: 'left'
                        },
                        series: [{
                            name: 'Access From',
                            type: 'pie',
                            radius: '50%',
                            data: [{
                                    value: 1048,
                                    name: 'Search Engine'
                                },
                                {
                                    value: 735,
                                    name: 'Direct'
                                },
                                {
                                    value: 580,
                                    name: 'Email'
                                },
                                {
                                    value: 484,
                                    name: 'Union Ads'
                                },
                                {
                                    value: 300,
                                    name: 'Video Ads'
                                }
                            ],
                            emphasis: {
                                itemStyle: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                                }
                            }
                        }]
                    });
                });
            </script>
            <!-- End Pie Chart -->
        </div>
    </div>
</x-app-layout>
