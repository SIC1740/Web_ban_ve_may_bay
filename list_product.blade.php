<div class="admin-content">
    <table>
        <thead>
            <tr>
                <th>Nơi đi</th>
                <th>Nơi đến</th>
                <th>Thời gian khởi hành</th>
            </tr>
        </thead>
        <tbody>

        <form action="{{route('list')}}" method="get">

@csrf
            <div class="search-field">
                <label for="source">Điểm đi</label><br>
                <input type="text" id="source" name="source" placeholder="source">
            </div>
            <div class="search-field">
                <label for="destination">Điểm đến</label><br>
                <input type="text" id="destination" name="destination" placeholder="destination">
            </div>
            <div class="search-field">
                <label for="time">Ngày đi</label><br>
                <input type="date" id="time" name="time">
            </div>
            <div class="search-field">
                <button type="submit">Tìm kiếm</button>
        </div>
</form>
            @foreach($products as $product)
                <tr>
                    <td>1</td>
                    <td><img style="width: 70px;" src="{{asset('backend/asset/image/anh2.jpg')}}" alt=""></td>
                    <td>{{$product->source}}</td>
                    <td>{{$product->destination}}</td>
                    <td>{{$product->time}}</td>
                    <td><a href="{{route('support')}}">{{$product->price}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>