  <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="" class="waves-effect">
                                <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                           
                        </li>


                        <li class="menu-title" key="t-apps">Workers</li>

                        <ul>
                                <li>
                                    <a href="{{ route('admin.all-workers') }}" key="t-contacts">All Workers</a>
                                </li>

                                {{-- <li>
                                    <a href="{{ route('admin.approved-workers') }}" key="t-contacts">Approved Workers</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('admin.unapproved-workers') }}" key="t-contacts">Un-approved  Workers</a>
                                </li>
                                <li>
                                    {{-- <a href="{{ route('admin.active-workers') }}" key="t-contacts">Active  Workers</a> --}}
                                </li>
                                <li>
                                    <a href="" key="t-contacts">Active  Workers</a>
                                </li>
                        </ul>

                        <li class="menu-title" key="t-apps">HOD</li>

                        <ul>
                                <li>
                                    <a href="{{ route('admin.all-Hod')}}" key="t-contacts">All HOD</a>
                                </li>
                                 <li>
                                    <a href="{{ route('admin.assign-Hod')}}" key="t-contacts">Assign New HOD</a>
                                </li>
                        </ul>

                        <li class="menu-title" key="t-components">Features</li>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" key="t-contacts">Messages</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" key="t-contacts">Votings</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" key="t-contacts">Awards</a>
                            </li>
                    </ul>


                    </ul>
                </div>
              