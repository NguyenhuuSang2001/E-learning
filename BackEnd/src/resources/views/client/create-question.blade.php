<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight position-absolute">
            {{ __('Ngân hàng câu hỏi') }}
        </h2>

    </x-slot>



    <div class="py-12">
        <div class="container mb-1 d-flex flex-row-reverse"><a href="{{ route('clients.questionStore.index', 1) }}">
                Quay lại ngân hàng câu hỏi</a>
        </div>
        <div class="container">

            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="content_question" class="form-label">Nội dung câu hỏi: </label>
                    <textarea class="form-control" placeholder="Nội dung câu hỏi" id="content_question" name="content_question"
                        style="height: 100px"></textarea>
                </div>
                @php
                    $id_answer = 0;
                @endphp
                <div class="mb-3">
                    <div class="form-floating">
                        <label for="floatingTextarea2">Câu trả lời {{ $id_answer + 1 }} (Câu trả lời đúng) *</label>
                        <textarea name="answer_1" id="answer_1" class="form-control" placeholder="Câu trả lời 1" id="floatingTextarea2"
                            style="height: 150px"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <label for="floatingTextarea2">Câu trả lời {{ $id_answer + 2 }}</label>
                        <textarea name="answer_2" class="form-control" placeholder="Câu trả lời 2" id="floatingTextarea2"
                            style="height: 150px"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <label for="floatingTextarea2">Câu trả lời {{ $id_answer + 3 }}</label>
                        <textarea name="answer_3" class="form-control" placeholder="Câu trả lời 3" id="floatingTextarea2"
                            style="height: 150px"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <label for="floatingTextarea2">Câu trả lời {{ $id_answer + 4 }}</label>
                        <textarea name="answer_4" class="form-control" placeholder="Câu trả lời 4" id="floatingTextarea2"
                            style="height: 150px"></textarea>
                    </div>
                </div>



                {{-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I'm not Robot</label>
                </div> --}}
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" style="background-color: #007bff">Lưu câu hỏi</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>


<x-footer></x-footer>
