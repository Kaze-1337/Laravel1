<x-guest-layout>
 
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('https://cdn.pixabay.com/photo/2016/11/18/14/39/beans-1834984_960_720.jpg')">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Chào mừng đến với cửa hàng Nom Nom</span>
        </h1>
        <p class="mt-6 text-lg text-gray-300 md:text-center">Chúng tôi cung cấp những món ăn ngon, chất lượng, và phục vụ tận tâm nhất cho bạn</p>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="button"
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-full lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                    Đặt bàn
                </a>
        </div>
        
    </div>
    
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        
                        <h3 class="text-xl">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-green-600">Welcome</h2>
                        
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                            Từ một quán nhỏ ven đường đến hành trình trở thành nơi yêu thích của những tín đồ ẩm thực nhanh, nhà hàng của chúng tôi bắt đầu từ niềm đam mê đơn giản: mang đến những món ăn ngon, nhanh, và chất lượng cho mọi người.
                        </p>
                        
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold">Về chúng tôi</h2>
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            Tại sao nên chọn Nom Nom</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Chất lượng đảm bảo, hương vị độc đáo.
                            </p>
                            <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Phục vụ tận tâm, không gian ấm cúng.
                            </p>
                            <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Nhanh chóng, tiện lợi, giá cả hợp lý.
                            </p>
                            <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Hương vị Việt, trải nghiệm ẩm thực mới lạ.
                            </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Xử lí nhanh chóng</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Thanh toán tiện lợi</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png"
                        alt="feature image"></div>
            </div>
        </div>
    </section>
    
    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Phản hồi từ khách hàng </h2>
            
        </div>
        <div class="grid gap-2 lg:grid-cols-3">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Đồ ăn</h2>
                    <p class="mt-2 text-gray-600">Món ăn tại NomNom thực sự ngon và đậm đà, đúng như tên gọi! Dịch vụ nhanh chóng, nhân viên thân thiện, chắc chắn mình sẽ quay lại nhiều lần nữa.</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">Dương Phong</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Không gian nhà hàng ấm cúng, sạch sẽ, tạo cảm giác thoải mái khi thưởng thức bữa ăn. Đồ ăn chất lượng, trình bày đẹp mắt, rất đáng để trải nghiệm!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">Minh Ngọc</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Hương vị món ăn rất tuyệt, gia vị nêm nếm vừa vặn, cảm giác như được thưởng thức một bữa ăn chuẩn vị nhà làm. Giá cả hợp lý, phục vụ chu đáo, chắc chắn sẽ giới thiệu cho bạn bè!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">Nguyễn Linh</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
