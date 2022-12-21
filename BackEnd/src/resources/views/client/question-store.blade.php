<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight position-absolute">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>



    <div class="py-12">

        <form action="" method="get" class="container mb-4">
            <input name="keywords" type="search" class="form-control mb-3 col-12" placeholder="Từ khoá tìm kiếm...
            " value="{{ request()->keywords }}">
            <div class="row">

                <div class="col-2">
                    <select name="subject" class="form-control">
                        <option value="0">Tất cả môn</option>
                        {{-- <option value="Toan" {{ request()->subject == 'Toan' ? 'selected' : false }}>Toán</option>
                        <option value="Ly" {{ request()->subject == 'Ly' ? 'selected' : false }}>Lý</option> --}}
                        @if (!empty(getAllSubjects()))
                            @foreach (getAllSubjects() as $item)
                                <option value="{{ $item->id }}"
                                    {{ request()->subject == $item->id ? 'selected' : false }}>
                                    {{ $item->content }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-3">
                    <select name="component_sub" class="form-control">
                        <option value="0">Tất cả thành phần</option>
                        @if (!empty(getAllComponents()))
                            @foreach (getAllComponents() as $item)
                                <option value="{{ $item->id }}"
                                    {{ request()->component_sub == $item->id ? 'selected' : false }}>
                                    {{ $item->content }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-3">
                    <select name="topic" class="form-control">
                        <option value="0">Tất cả chủ đề</option>
                        @if (!empty(getAllTopics()))
                            @foreach (getAllTopics() as $item)
                                <option value="{{ $item->id }}"
                                    {{ request()->topic == $item->id ? 'selected' : false }}>
                                    {{ $item->content }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-2">
                    <select name="status" class="form-control">
                        <option value="0">Trạng thái</option>
                        <option value="public" {{ request()->status == 'public' ? 'selected' : false }}>Public
                        </option>
                        <option value="private" {{ request()->status == 'private' ? 'selected' : false }}>Private
                        </option>
                    </select>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary btn-block">Tìm kiếm</button>
                </div>

            </div>


        </form>
        @php
            $client = 1;
        @endphp
        <div class="container  mb-4 d-flex flex-row-reverse"><a class="btn btn-success" role="button"
                href="{{ route('clients.question.index', $client) }}">
                Thêm câu hỏi</a></div>

        <div class="container">
            <table class="table table-bordered bg-white">
                <thead>
                    <tr>
                        <th width="5%">STT</th>
                        <th>Môn học</th>
                        <th>Thành phần</th>
                        <th>Nội dung câu hỏi</th>
                        <th>Số lượng câu trả lời</th>
                        <th width="15%">Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @php
                        dd($all_questions);
                    @endphp --}}
                    @if (!empty($all_questions))
                        @foreach ($all_questions as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ 'Lịch sử' }}</td>
                                <td>{{ 'Lý thuyết' }}</td>
                                <td>{{ $item->content }}</td>
                                <td>{{ $item->number_answer }}</td>
                                <td>{{ $item->created_at }}</td>
                                {{-- <td>{{ $item->updated_at }}</td> --}}
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td></td>
                            <td colspan="6">Không có câu hỏi</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>


<x-footer></x-footer>
