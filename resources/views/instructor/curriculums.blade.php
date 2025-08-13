<main class="col-span-5 px-8 py-4 flex flex-col h-dvh gap-16 overflow-y-none">
    <!-- Greetings -->
    <div class="flex gap-2 w-auto justify-between">
        <div class="flex gap-4">
            <span class="w-1 h-full bg-blue-button rounded-full"></span>
            <div>
                <h1 class="text-2xl font-medium">
                    Welcome back, Sir
                    <span class="font-bold text-blue-button">Dave</span>
                </h1>
                <p class="text-sm text-paragraph">Here is your summary today</p>
            </div>
        </div>

        <!-- Buttons -->
        <button
            class="flex items-center bg-white py-2 px-5 rounded-full gap-2 shadow-2xl text-paragraph cursor-pointer hover:text-white hover:bg-blue-button hover:shadow-xl/35 hover:shadow-blue-button hover:scale-105">
            <span class="material-symbols-rounded">add</span>
            <p class="text-sm">Add Curriculum</p>
        </button>
    </div>

    <!-- curriculumn Table -->
    <div class="flex flex-col gap-4 min-h-[20%]">
        <div class="side flex items-center justify-between gap-2">
            <h1 class="text-4xl font-medium">Curriculum List</h1>
            <div
                class="flex items-center bg-white py-3 px-5 rounded-full shadow-2xl text-paragraph hover:bg-blue-button hover:text-white cursor-pointer">
                <select name="" id="" class="w-25 outline-none">
                    <option value="pending" class="text-sm text-heading-dark" selected disabled>
                        Filter by
                    </option>
                    <option value="pending" class="text-sm text-heading-dark">
                        All
                    </option>
                    <option value="pending" class="text-sm text-lime">Active</option>
                    <option value="pending" class="text-sm text-paragraph">
                        Inactive
                    </option>
                </select>
                <!-- <span class="material-symbols-rounded">more_horiz</span>
                    <span class="material-symbols-rounded">search</span> -->
            </div>
        </div>

        <div class="flex flex-col min-h-[20%] p-6 bg-white rounded-3xl">
            <div class="flex flex-col overflow-y-scroll">
                <div class="flex flex-col bg-whitel rounded-3xl bg-white">
                    <table class="table-auto border-separate relative">
                        <thead class="sticky top-0 left-0 z-40 bg-white">
                            <tr>
                                <th class="px-4 pb-3 text-center font-semibold">ID</th>
                                <th class="px-4 pb-3 text-center font-semibold">
                                    Curriculum Name
                                </th>
                                <th class="px-4 pb-3 text-center font-semibold">Units</th>
                                <th class="px-4 pb-3 text-center font-semibold">
                                    Specializzation
                                </th>
                                <th class="px-4 pb-3 text-center font-semibold w-20">
                                    No. of Subjects
                                </th>
                                <th class="px-4 pb-3 text-center font-semibold w-20">
                                    No. of Students
                                </th>
                                <th class="px-4 pb-3 text-center font-semibold">Status</th>
                                <th class="px-4 pb-3 text-center font-semibold">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="px-4 py-3 text-center">01</td>
                                <td class="px-4 py-3 text-center">FSL Curriculum HAHAHA</td>
                                <td class="px-4 py-3 text-center">8</td>
                                <td class="px-4 py-3 text-center">
                                    Autism, Hearing, Speech
                                </td>
                                <td class="px-4 py-3 text-center">6</td>
                                <td class="px-4 py-3 text-center">24</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex justify-center items-center">
                                        <div class="gap-2 bg-[#D2FBD0] px-2 py-1 rounded-full flex items-center w-fit">
                                            <small class="text-[#0D5F07]">Active</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex justify-center items-center gap-1 text-white">
                                        <button
                                            class="bg-danger px-2 py-1 flex gap-2 items-center rounded-lg cursor-pointer hover:scale-110">
                                            <small>Edit</small>
                                        </button>
                                        <button
                                            class="bg-blue-button px-2 py-1 flex gap-2 items-center rounded-lg cursor-pointer hover:scale-110">
                                            <small>View</small>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Aside -->
<aside class="col-span-2 grid grid-cols-1 grid-rows-2 pr-4 py-4 gap-4 h-dvh">
    <!-- Student Feed -->
    <div class="bg-white w-full h-full rounded-3xl px-3 pt-3 pb-6 flex flex-col gap-3">
        <div class="flex gap-2 items-center p-3">
            <span class="material-symbols-rounded text-yellowOrange">local_library</span>
            <h1 class="text-xl font-semibold">Student Feed</h1>
        </div>

        <!-- Student Notifications -->
        <div class="flex flex-col gap-2 px-3 overflow-y-auto">
            <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                <!-- notification Details -->
                <div>
                    <h2 class="leading-tight font-semibold text-md">
                        Juan Dela Cruz
                    </h2>
                    <p class="text-xs leading-tight text-paragraph">
                        Completed Lesson 1
                    </p>
                </div>
            </div>

            <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                <!-- notification Details -->
                <div>
                    <h2 class="leading-tight font-semibold text-md">
                        Juan Dela Cruz
                    </h2>
                    <p class="text-xs leading-tight text-paragraph">
                        Completed Lesson 1
                    </p>
                </div>
            </div>

            <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                <!-- notification Details -->
                <div>
                    <h2 class="leading-tight font-semibold text-md">
                        Juan Dela Cruz
                    </h2>
                    <p class="text-xs leading-tight text-paragraph">
                        Completed Lesson 1
                    </p>
                </div>
            </div>

            <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                <!-- notification Details -->
                <div>
                    <h2 class="leading-tight font-semibold text-md">
                        Juan Dela Cruz
                    </h2>
                    <p class="text-xs leading-tight text-paragraph">
                        Completed Lesson 1
                    </p>
                </div>
            </div>

            <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                <!-- notification Details -->
                <div>
                    <h2 class="leading-tight font-semibold text-md">
                        Juan Dela Cruz
                    </h2>
                    <p class="text-xs leading-tight text-paragraph">
                        Completed Lesson 1
                    </p>
                </div>
            </div>

            <div class="flex gap-2 w-full bg-card p-3 rounded-full">
                <img src="{{ asset('images/profile.jpg') }}" class="rounded-full w-10" alt="" />
                <!-- notification Details -->
                <div>
                    <h2 class="leading-tight font-semibold text-md">
                        Juan Dela Cruz
                    </h2>
                    <p class="text-xs leading-tight text-paragraph">
                        Completed Lesson 1
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- System Feed -->
    <div class="bg-white w-full h-full rounded-3xl px-3 pt-3 pb-6 flex flex-col gap-3">
        <div class="flex gap-2 items-center p-3">
            <span class="material-symbols-rounded text-danger">settings_alert</span>
            <h1 class="text-xl font-semibold">System Feed</h1>
        </div>

        <!-- System Notifications -->
        <div class="flex flex-col gap-2 px-3 overflow-y-auto">
            <div class="gap-2 w-full bg-card p-3 rounded-lg">
                <!-- System Details -->
                <h2 class="leading-tight font-semibold text-md">
                    Lesson Created Successfully!
                </h2>
                <p class="text-xs leading-tight text-paragraph">just now</p>
            </div>

            <div class="gap-2 w-full bg-card p-3 rounded-lg">
                <!-- System Details -->
                <h2 class="leading-tight font-semibold text-md">
                    Lesson Created Successfully!
                </h2>
                <p class="text-xs leading-tight text-paragraph">just now</p>
            </div>

            <div class="gap-2 w-full bg-card p-3 rounded-lg">
                <!-- System Details -->
                <h2 class="leading-tight font-semibold text-md">
                    Lesson Created Successfully!
                </h2>
                <p class="text-xs leading-tight text-paragraph">just now</p>
            </div>

            <div class="gap-2 w-full bg-card p-3 rounded-lg">
                <!-- System Details -->
                <h2 class="leading-tight font-semibold text-md">
                    Lesson Created Successfully!
                </h2>
                <p class="text-xs leading-tight text-paragraph">just now</p>
            </div>

            <div class="gap-2 w-full bg-card p-3 rounded-lg">
                <!-- System Details -->
                <h2 class="leading-tight font-semibold text-md">
                    Lesson Created Successfully!
                </h2>
                <p class="text-xs leading-tight text-paragraph">just now</p>
            </div>

            <div class="gap-2 w-full bg-card p-3 rounded-lg">
                <!-- System Details -->
                <h2 class="leading-tight font-semibold text-md">
                    Lesson Created Successfully!
                </h2>
                <p class="text-xs leading-tight text-paragraph">just now</p>
            </div>
        </div>
    </div>
</aside>

<!-- Forms and pop ups-->
<div class="bg-black/30 absolute w-dvw h-dvh top-0 left-0 z-50 backdrop-blur-xs hidden justify-center items-center">
    <!-- forms -->
    <div class="bg-white p-8 rounded-4xl w-150 hidden flex-col gap-8">
        <div class="flex items-center gap-4">
            <img src="{{ asset('images/book.png') }}" alt="" />
            <h1 class="text-2xl font-semibold text-heading-dark">
                Add Curriculumn
            </h1>
        </div>

        <div class="flex flex-col gap-3">
            <h2 class="font-medium text-lg">Curriculum Details</h2>
            <div class="flex flex-col gap-2">
                <input type="text" placeholder="Name"
                    class="px-3 py-1 rounded-lg bg-card placeholder-paragraph outline-none" />

                <div class="px-2 py-1 rounded-lg bg-card">
                    <select name="" id="" class="w-full outline-none text-paragraph">
                        <option value="pending" class="text-sm text-black" selected disabled>
                            Grade Level
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            1
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            2
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            3
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            4
                        </option>
                    </select>
                </div>

                <div class="px-2 py-1 rounded-lg bg-card">
                    <select name="" id=""
                        class="w-full outline-none text-paragraph outline-1 outline-card focus:outline-blue-button">
                        <option value="pending" class="text-sm text-black" selected disabled>
                            Specializzation
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            1
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            2
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            3
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            4
                        </option>
                    </select>
                </div>

                <div
                    class="flex items-center justify-between pl-3 pr-2 py-1 rounded-lg border-1 border-dashed border-paragraph placeholder-paragraph inputs">
                    <input type="text" placeholder="Add another Disability" class="placeholder-paragraph" />
                    <span class="material-symbols-rounded small-icons text-paragraph">add</span>
                </div>

                <textarea name="" id="" maxlength="200" placeholder="Description (Optional)"
                    class="px-3 py-2 rounded-lg bg-card placeholder-paragraph resize-none h-24 outline-none"></textarea>
                <div class="px-2 py-1 rounded-lg bg-card">
                    <select name="" id="" class="w-full outline-none text-paragraph">
                        <option value="pending" class="text-sm text-black" selected disabled>
                            Subjects
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            1
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            2
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            3
                        </option>
                        <option value="pending" class="text-sm text-paragraph">
                            4
                        </option>
                    </select>
                </div>

                <div
                    class="flex items-center justify-between pl-3 pr-2 py-1 rounded-lg border-1 border-dashed border-paragraph placeholder-paragraph inputs">
                    <input type="text" placeholder="Add another Subject" class="placeholder-paragraph" />
                    <span class="material-symbols-rounded small-icons text-paragraph">add</span>
                </div>
            </div>
        </div>
        <!-- buttons -->
        <div class="flex items-center gap-2">
            <button class="bg-gray-100 py-1.5 px-3 w-full rounded-xl text-heading-dark font-medium">
                Cancel
            </button>
            <button type="submit" class="bg-blue-button py-1.5 px-3 w-full rounded-xl text-white font-medium">
                Save
            </button>
        </div>
    </div>
    <!-- End of forms -->

    <!-- Curriculum Info -->
    <div class="bg-white p-8 rounded-4xl w-150 flex flex-col gap-8">
        <div class="flex items-center gap-4">
            <img src="{{ asset('images/book.png') }}" alt="" />
            <h1 class="text-2xl font-semibold text-heading-dark">
                Curriculum name
            </h1>
        </div>

        <div class="flex w-full gap-4">
            <div
                class="bg-gradient-to-tr from-blue-button to-[#00EEFF] shadow-blue-button shadow-2xl/45 p-6 text-white rounded-3xl flex flex-col justify-between gap-6">
                <div class="flex justify-between w-40">
                    <div>
                        <p class="text-xs leading-snug font-normal">Total Students</p>
                        <h1 class="text-lg font-semibold leading-6">EBROLLED</h1>
                    </div>
                    <span class="material-symbols-rounded icon">people</span>
                </div>
                <h1 class="text-4xl font-semibold">24</h1>
            </div>

            <div class="border-1 border-gray-300 p-6 rounded-3xl w-full flex flex-col justify-between">
                <div class="flex items-center w-auto">
                    <h3 class="text-sm font-semibold w-25">Status:</h3>
                    <div class="px-2 py-1 rounded-lg bg-[#D2FBD0] w-fit">
                        <select name="" id="" class="w-fit outline-none text-[#0D5F07] text-sm">
                            <option value="pending" class="text-sm text-black" selected>
                                Active
                            </option>
                            <option value="pending" class="text-sm text-black">
                                inactive
                            </option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center w-auto">
                    <h3 class="text-sm font-semibold w-25">Id:</h3>
                    <p class="text-sm">28143129</p>
                </div>

                <div class="flex items-center w-auto">
                    <h3 class="text-sm font-semibold w-25">Specialize:</h3>
                    <p class="text-sm">Hearing, Speech</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-2">
            <h1 class="text-lg font-medium">Description</h1>
            <p class="text-sm text-paragraph text-justify">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                in sed sunt. Consectetur ducimus inventore voluptatum, laudantium
                qui, nihil autem rem excepturi minima reiciendis non alias tempora
                voluptatem deleniti provident cupiditate magnam. Reiciendis
                veritatis eum libero perferendis beatae fugiat quod tempore est,
                aperiam ab placeat debitis accusantium dolore nihil cum.
            </p>
        </div>

        <div class="flex flex-col gap-2">
            <h1 class="text-lg font-medium">Subjects</h1>
            <div class="grid grid-cols-4 gap-4">
                <div class="flex flex-col items-center gap-6 bg-gray-100 rounded-3xl p-4 col-span-1">
                    <h2 class="text-base">Subject 1</h2>
                    <div class="text-center">
                        <h1 class="text-xl font-semibold">2 Units</h1>
                        <p class="text-sm text-paragraph">3 Lessons</p>
                    </div>
                </div>

                <div class="flex flex-col items-center gap-6 bg-gray-100 rounded-3xl p-4 col-span-1">
                    <h2 class="text-base">Subject 2</h2>
                    <div class="text-center">
                        <h1 class="text-xl font-semibold">2 Units</h1>
                        <p class="text-sm text-paragraph">3 Lessons</p>
                    </div>
                </div>

                <div class="flex flex-col items-center gap-6 bg-gray-100 rounded-3xl p-4 col-span-1">
                    <h2 class="text-base">Subject 3</h2>
                    <div class="text-center">
                        <h1 class="text-xl font-semibold">2 Units</h1>
                        <p class="text-sm text-paragraph">3 Lessons</p>
                    </div>
                </div>

                <div class="flex flex-col items-center gap-6 bg-gray-100 rounded-3xl p-4 col-span-1">
                    <h2 class="text-base">Subject 4</h2>
                    <div class="text-center">
                        <h1 class="text-xl font-semibold">2 Units</h1>
                        <p class="text-sm text-paragraph">3 Lessons</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <button class="bg-gray-100 py-1.5 px-3 w-full rounded-xl text-heading-dark font-medium">
                Close
            </button>
            <button type="submit" class="bg-blue-button py-1.5 px-3 w-full rounded-xl text-white font-medium">
                Edit Curriculum
            </button>
        </div>
    </div>
    <!-- End of Curriculum Info-->
</div>
