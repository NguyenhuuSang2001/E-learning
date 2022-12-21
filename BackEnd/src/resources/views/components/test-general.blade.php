{{-- <div>
    <div class="container">
        <h4 class="title ">{{ $name }}</h4>
        <div class="author">{{ $author['name'] }}</div>
        <div class="code">{{ $code }}</div>
        <div class="public">{{ $public === true ? 'Published' : 'Private' }}</div>
        <div class="create">{{ $create }}</div>
    </div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div> --}}
<div class="col col-md-6" style="margin-bottom: 20px">
    <div class="card text-left">
        <div class="card-header" style="font-weight: bold; color:#065592">
            {{ $name }}
        </div>
        <div class="card-body" style="font-size:14px">
            <h5 class="card-title">Người tạo: {{ $author['name'] }}</h5>
            <p class="card-text"> Code : {{ $code }}</p>
            <p class="card-text">Trạng thái: {{ $public === true ? 'Published' : 'Private' }}</p>
            <div class="d-flex justify-content-between">
                <div class="card-text" style="margin-right: 32px;
            background: url('{{ asset('front-end/image/num-exam.png') }}') no-repeat left center;
            padding: 2px 0 0 20px;">{{ $create }}</div>
                <div style="background: url('{{ asset('front-end/image/num-attempt.png') }}') no-repeat left center;
                padding: 2px 0 0 16px;">57 lượt thi</div>
            </div>
            <hr style="margin-bottom: 15px;">
            <div class="d-flex justify-content-end">
                <a href="{{ route('clients.exam.show', [1, 1]) }}" class="btn btn-primary btn-sm">Bắt đầu làm bài</a>
            </div>
        </div>
    </div>
</div>
