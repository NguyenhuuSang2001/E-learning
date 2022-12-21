<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight position-absolute">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>



    <div class="py-12">
        <div class="container">
            <form action="" method="GET">
                @method('POST')
                <div class="mb-3 h3 text-center">
                    {{ $name }}

                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <label for="floatingTextarea2">Mô tả: </label>
                        <textarea class="form-control" disabled placeholder="Mô tả bài kiểm tra" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="mb-3">Bắt đầu làm bài</div>
                @php
                    $questions = [1 => 1, 2 => 7, 3 => 8];
                    // dd($data);
                @endphp
                @if (!empty($data))

                    @foreach ($data as $key => $item)
                        <div class="row mb-3">
                            <label style="margin-left: 20px;font-weight: bold;">Câu {{ $key + 1 }} : </label>
                            <div class='ml-3 mb-3'>{{ $item['1'] }}</div>
                            <div class="container">
                                <input class="mr-2" style="margin-left: 20px;" type="radio"
                                    name={{ 'answer_' . $key }} id={{ 'answer_' . $key . 'A' }} value="A">
                                <label for={{ 'answer_' . $key . 'A' }}>{{ $item['2']['0']->content }}</label>
                            </div>
                            <div class="container">
                                <input class="mr-2" style="margin-left: 20px;" type="radio"
                                    name={{ 'answer_' . $key }} id={{ 'answer_' . $key . 'B' }} value="A">
                                <label for={{ 'answer_' . $key . 'B' }}>{{ $item['2']['1']->content }}</label>
                            </div>
                            <div class="container">
                                <input class="mr-2" style="margin-left: 20px;" type="radio"
                                    name={{ 'answer_' . $key }} id={{ 'answer_' . $key . 'C' }} value="C">
                                <label for={{ 'answer_' . $key . 'C' }}>{{ $item['2']['2']->content }}</label>

                            </div>
                            <div class="container">
                                <input class="mr-2" style="margin-left: 20px;" type="radio"
                                    name={{ 'answer_' . $key }} id={{ 'answer_' . $key . 'D' }} value="A">
                                <label for={{ 'answer_' . $key . 'D' }}>{{ $item['2']['3']->content }}</label>

                            </div>

                        </div>
                    @endforeach
                @endif

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" style="background-color: #007bff">Nộp bài</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>


<x-footer></x-footer>
