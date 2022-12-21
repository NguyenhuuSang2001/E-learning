<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight position-absolute">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>
    @php
        // dd($message);
        if (!empty($message)) {
            echo '<script type="text/javascript">
                ';
                echo ' alert("'.$message.
                '")'; //not showing an alert box.
                echo '
            </script>';
        }
    @endphp


    <div class="py-12">
        <div class="container">
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nameTest" class="form-label">Tên bài kiểm tra: </label>
                    <input type="text" class="form-control border-0 rounded " id="nameTest" name="nameTest"
                        autocomplete="off" placeholder="Tên bài kiểm tra">
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <label for="floatingTextarea2">Mô tả: </label>
                        <textarea class="form-control" placeholder="Mô tả bài kiểm tra" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                    </div>
                </div>


                <div class="mb-3 row">

                    <div class="col-3">
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
                    <div class="col-3">
                        <select name="status" class="form-control">
                            <option value="0">Trạng thái</option>
                            <option value="public" {{ request()->status == 'public' ? 'selected' : false }}>Public
                            </option>
                            <option value="private" {{ request()->status == 'private' ? 'selected' : false }}>Private
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <x-date-input></x-date-input>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I'm not Robot</label>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" style="background-color: #007bff">Tạo bài kiểm
                        tra</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>


<x-footer></x-footer>
