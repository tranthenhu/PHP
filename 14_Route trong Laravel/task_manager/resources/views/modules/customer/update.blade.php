<form  method="POST" >
        @csrf
        <p>
            <input type="text" name="name" placeholder="Tên khách hàng">
        </p>
        <p>
            <input type="text" name="bod" placeholder="Ngày Sinh">
        </p>
            <input type="text" name="email" placeholder="Email">
        </p>
        <p>
            <button type="submit">update</button>
        </p>
    </form>