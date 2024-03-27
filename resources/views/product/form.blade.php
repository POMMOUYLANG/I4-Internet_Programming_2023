<x-layout>
    <form action="/product/store" method="POST" enctype="multipart/form-data" style="width: 70vw">
        @csrf
        <fieldset style="display: flex; flex-direction:column;  gap: 20px ; border:3px solid black">
            <legend><h1>Product Form</h1></legend>
            <div>
                <label for="name" class="form-label" style="width:15%; padding-right:5%;font-size:23px">Name:</label>
                <input type="text" class="form-control" id="name" name="name" style="width:80%;height:30px">
            </div>
            <div style="display: flex">
                <div style="width:41%; padding-right:9%" >
                    <label for="pricing" class="form-label" style="width:20%; padding-right:13% ;font-size:23px">Price:</label>
                    <input type="number" class="form-control" id="pricing" name="pricing" min="1"  style="width:80%;height:30px">
                </div>
                <div style="width:50%">
                    <label for="promotion" class="form-label" style="width:15%; padding-right:5% ;font-size:23px">Promotion:</label>
                    <input type="number" class="form-control" id="promotion" name="promotion" style="width:80%;height:30px" >
                </div>
            </div>

            <div>
                <label class="visually-hidden" for="category" style="width:15%; padding-right:2% ;font-size:23px">Category:</label>
                <select class="form-select" id="category" name="category"   style="width:25%;height:40px">
                    @foreach ( $categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
              </div>
            <div >
                <label for="image" class="form-label" style="width:15%; padding-right:5%;font-size:23px">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div style="display: flex;">
                <p class="form-label" style="width:11.5%;">Description</p>
                <textarea id="description" name="description" ></textarea>
            </div>

            <div style="width:100%;display: flex; align-items:center; justify-content:end; gap:10px">
                <a href="{{route("home")}}"  style="padding:18px 28px; text-decoration: none; background-color: black; color:white; border:none; border-radius:5px;font-size:20px">Cancel</a>
                <button type="submit" style="padding:18px 28px; text-decoration: none; background-color: blue; color:white; border:none; border-radius:5px;font-size:20px">Create</button>
            </div>
        </fieldset>
    </form>
</x-layout>




