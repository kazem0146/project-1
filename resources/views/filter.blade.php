<form action="{{route('article')}}" method="get">
    <div class="dasteha hidden-xs ">
        <div class="col-md-5">
            <select class="custom-select col-md-12" name="order">
                <option value="latest" {{ request('order') == 'latest' ? 'selected' : '' }}>جدید ترین مطالب</option>
                <option value="oldest" {{ request('order') == 'oldest' ? 'selected' : '' }}>قدیمی ترین مطالب</option>
            </select>
        </div>
        <div class="col-md-5">
            <select class="custom-select col-md-12" name="category">
                <option value="0">دسته خود را انتخاب کنید</option>
                @foreach(\App\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-warning ">فیلتر</button>

        </div></div>
</form>
