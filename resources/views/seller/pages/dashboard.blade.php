<x-layout>
    <div class="container py-5 p-2">
        <x-nav />
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-3 bg-white shadow">
                <!-- Profile Card -->
                <div class="card mb-4" style="border-radius: 8px;">
                    <div class="card-body text-center">
                        <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp"
                            class="rounded-circle mb-3" style="width: 80px; height: 80px;" alt="Profile Picture">
                        <h5 class="card-title mb-1">Albash ul haq </h5>
                        <p class="text-muted" style="font-size: 14px;">@Albash</p>
                        <button class="btn btn-outline-secondary w-100 mb-2" style="border-radius: 4px;">View
                            profile</button>
                    </div>
                </div>

                <!-- Level Overview Card -->
                <div class="card mb-4 bg-white shadow" style="border-radius: 8px;">
                    <div class="card-body">
                        <h6 class="mb-3">Level overview</h6>
                        <div class="mb-2 d-flex justify-content-between">
                            <span style="color: #666;">My level</span>
                            <span>Level 0</span>
                        </div>
                        <div class="mb-2 d-flex justify-content-between">
                            <span style="color: #666;">Success score</span>
                            <span>-</span>
                        </div>
                        <div class="mb-2 d-flex justify-content-between">
                            <span style="color: #666;">Rating</span>
                            <span>★ -</span>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <span style="color: #666;">Response rate</span>
                            <span>-</span>
                        </div>
                        <button class="btn btn-outline-secondary w-100" style="border-radius: 4px;">View
                            progress</button>
                    </div>
                </div>

                <!-- Availability Card -->
                <div class="card mb-4 bg-white shadow" style="border-radius: 8px;">
                    <div class="card-body">
                        <h6 class="mb-3">Availability</h6>
                        <p style="font-size: 14px; color: #666;">While unavailable, your Gigs are hidden and you
                            will
                            not receive new orders.</p>
                        <button class="btn btn-outline-secondary w-100" style="border-radius: 4px;">Set your
                            availability</button>
                    </div>
                </div>

                <!-- Earnings Card -->
                <div class="card bg-white shadow" style="border-radius: 8px;">
                    <div class="card-body d-flex justify-content-between">
                        <span style="color: #666;">Earned in December</span>
                        <span>$0</span>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 bg-white shadow">
                <!-- Active Orders Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0 border p-4 rounded-3">Active orders - 0 ($0)</h5>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown">
                            Active orders (0)
                        </button>
                    </div>
                </div>

                <!-- Upgrade Section -->
                <div class="card mb-4 bg-white shadow" style="border-radius: 8px;">
                    <div class="card-body">
                        <h5 class="mb-4">Upgrade Your Business</h5>
                        <h4 class="mb-3">3 steps to become a top seller on Fiverr</h4>
                        <p class="text-muted mb-5">The key to your success on Fiverr is the brand you build for
                            yourself
                            through your Fiverr reputation. We gathered some tips and resources to help you become a
                            leading seller on Fiverr.</p>

                        <div class="row g-4">
                            <!-- Step 1 -->
                            <div class="col-md-4 bg-white shadow">
                                <div class="text-center">
                                    <div class="mb-3" style="font-size: 24px;">🔊</div>
                                    <h6>Get noticed</h6>
                                    <p style="font-size: 14px; color: #666;">Tap into the power of social media by
                                        sharing your Gig, and get expert help to grow your impact.</p>
                                    <button class="btn btn-outline-primary" style="border-radius: 4px;">Share Your
                                        Gigs</button>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="col-md-4 bg-white shadow">
                                <div class="text-center">
                                    <div class="mb-3" style="font-size: 24px;">📚</div>
                                    <h6>Get more skills & exposure</h6>
                                    <p style="font-size: 14px; color: #666;">Hone your skills and expand your
                                        knowledge
                                        with online courses. You'll gain more exposure with every course completed.
                                    </p>
                                    <button class="btn btn-outline-primary" style="border-radius: 4px;">Explore
                                        Learn</button>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="col-md-4 bg-white shadow">
                                <div class="text-center">
                                    <div class="mb-3" style="font-size: 24px;">🌟</div>
                                    <h6>Become a successful seller!</h6>
                                    <p style="font-size: 14px; color: #666;">Watch this free online course to learn
                                        how
                                        to create an outstanding service experience for your buyer and grow your
                                        career.
                                    </p>
                                    <button class="btn btn-outline-primary" style="border-radius: 4px;">Watch Free
                                        Course</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Section -->
                <div class="card" style="border-radius: 8px;">
                    <div class="card-body p-0">
                        <img src="/placeholder.svg?height=400&width=800" class="w-100" style="border-radius: 8px;"
                            alt="The 7 secrets">
                    </div>
                </div>
            </div>
        </div>


    </div>
    @include('seller.partials.fotter')

</x-layout>
