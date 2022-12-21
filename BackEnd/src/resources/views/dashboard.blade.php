<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight position-absolute">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>



    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-12" style="padding-bottom: 0px; ">
        <form action="" method="get">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="input-group d-flex justify-content-center">
                    <div class="input-group mb-3" style="width: 60%">
                        <input type="text" name="keywords" value="{{ request()->keywords }}" class="form-control"
                            placeholder="Nhập thông tin tìm kiếm . . .">
                        <button type="submit" id="basic-addon2" class="btn btn-primary "
                            style="border-radius: 0px; background-color: #007bff">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @php
        $name = ' Đề thi gữa kỳ HK2 môn Lịch sử 12 năm học 2021-2022 ';
        $author = ['name' => 'Nguyễn Hữu Sang'];
        $code = 123;
        $public = true;
        $create = '12/01/2021';
    @endphp
    @for ($i = 0; $i < 5; $i++)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="text-center fs-1" style="font-size: 20px; margin-bottom: 10px">Lịch sử</div>
                        <hr style="margin-bottom: 15px;">
                        <div class="container overflow-hidden">
                            <div class="row gy-5">
                                @for ($j = 0; $j < 10; $j++)
                                    <x-test-general :name="$name" :author="$author" :code="$code"
                                        :public="$public" :create="$create">
                                    </x-test-general>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endfor


</x-app-layout>


<x-footer></x-footer>
