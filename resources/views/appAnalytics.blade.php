@extends('layouts.app')
@section('content')
    <div class="az-content az-content-dashboard-two">
{{--        <div class="az-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="az-header-left">--}}
{{--                    <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>--}}
{{--                </div>--}}
{{--                <div class="az-header-center">--}}
{{--                    <input type="search" class="form-control" placeholder="Search for anything...">--}}
{{--                    <button class="btn"><i class="fas fa-search"></i></button>--}}
{{--                </div><!-- az-header-center -->--}}
{{--                <div class="az-header-right">--}}
{{--                    <div class="dropdown az-header-notification">--}}
{{--                        <a href="" class="new"><i class="typcn typcn-bell"></i></a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <div class="az-dropdown-header mg-b-20 d-sm-none">--}}
{{--                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>--}}
{{--                            </div>--}}
{{--                            <h6 class="az-notification-title">Notifications</h6>--}}
{{--                            <p class="az-notification-text">You have 2 unread notification</p>--}}
{{--                            <div class="az-notification-list">--}}
{{--                                <!-- media -->--}}
{{--                                <div class="media">--}}
{{--                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>--}}
{{--                                        <span>Fri 13 02:56 AM</span>--}}
{{--                                    </div><!-- media-body -->--}}
{{--                                </div><!-- media -->--}}
{{--                                <div class="media">--}}
{{--                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>--}}
{{--                                        <span>Fri 13 02:56 AM</span>--}}
{{--                                    </div><!-- media-body -->--}}
{{--                                </div><!-- media -->--}}
{{--                            </div><!-- az-notification-list -->--}}
{{--                        </div><!-- dropdown-menu -->--}}
{{--                    </div><!-- az-header-notification -->--}}
{{--                    <div class="dropdown az-profile-menu">--}}
{{--                        <a href="" class="az-img-user"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <div class="az-dropdown-header d-sm-none">--}}
{{--                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>--}}
{{--                            </div>--}}
{{--                            <div class="az-header-profile">--}}
{{--                                <div class="az-img-user">--}}
{{--                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />--}}
{{--                                </div><!-- az-img-user -->--}}
{{--                                <h6>Hamid Ouballa</h6>--}}
{{--                                <span>Bingo Admin</span>--}}
{{--                            </div><!-- az-header-profile -->--}}


{{--                            <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>--}}
{{--                            <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>--}}
{{--                            <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Fellow Admins</a>--}}
{{--                            <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Log Out</a>--}}
{{--                        </div><!-- dropdown-menu -->--}}
{{--                    </div>--}}
{{--                </div><!-- az-header-right -->--}}
{{--            </div><!-- container -->--}}
{{--        </div><!-- az-header -->--}}
        <div class="az-content-header d-block d-md-flex" style="padding-bottom: 10px;">
            <div>
                <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
                <p class="mg-b-0">Your App Analytics Monitoring Dashboard.</p>
            </div>
            <div class="az-dashboard-nav">
                <nav class="nav" style = "margin-top: 25px;">
                    <a class="nav-link" href="#"><i class="far fa-save"></i> Save Report</a>
                    <a class="nav-link" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
                    <a class="nav-link" href="#"><i class="far fa-envelope"></i>Send to Email</a>
                    <a class="nav-link" href="#"><i class="fas fa-ellipsis-h"></i></a>
                </nav>
            </div><!-- az-dashboard-header-right -->
        </div><!-- az-content-header -->
        <div class="az-content-body">

            <!-- your content goes here... -->
            <div class="row row-sm mg-b-20">
                <div class="col-lg-7 ht-lg-100p">
                    <div class="card card-dashboard-one">
                        <div class="card-header">
                            <div>
                                <h6 class="card-title">Appsite Audience Metrics</h6>
                                <p class="card-text">Audience to which the users belonged while on the current date range.</p>
                            </div>
                            <div class="btn-group">
                                <button class="btn active">Day</button>
                                <button class="btn">Week</button>
                                <button class="btn">Month</button>
                            </div>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="card-body-top">
                                <div>
                                    <label class="mg-b-0">Users</label>
                                    <h2>13,956</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Bounce Rate</label>
                                    <h2>33.50%</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Page Views</label>
                                    <h2>83,123</h2>
                                </div>
                                <div>
                                    <label class="mg-b-0">Sessions</label>
                                    <h2>16,869</h2>
                                </div>
                            </div><!-- card-body-top -->
                            <div class="flot-chart-wrapper">
                                <div id="flotChart" class="flot-chart"></div>
                            </div><!-- flot-chart-wrapper -->
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-lg-5 mg-t-20 mg-lg-t-0">
                    <div class="row row-sm">
                        <div class="col-sm-6">
                            <div class="card card-dashboard-two">
                                <div class="card-header">
                                    <h6>33.50% <i class="icon ion-md-trending-up tx-success"></i> <small>18.02%</small></h6>
                                    <p>Bounce Rate</p>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div id="flotChart1" class="flot-chart"></div>
                                    </div><!-- chart-wrapper -->
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                            <div class="card card-dashboard-two">
                                <div class="card-header">
                                    <h6>86k <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small></h6>
                                    <p>Total Users</p>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <div class="chart-wrapper">
                                        <div id="flotChart2" class="flot-chart"></div>
                                    </div><!-- chart-wrapper -->
                                </div><!-- card-body -->
                            </div><!-- card -->
                        </div><!-- col -->
                        <div class="col-sm-12 mg-t-20">
                            <div class="card card-dashboard-three">
                                <div class="card-header">
                                    <p>All Sessions</p>
                                    <h6>16,869 <small class="tx-success"><i class="icon ion-md-arrow-up"></i> 2.87%</small></h6>
                                    <small>The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc.</small>
                                </div><!-- card-header -->
                                <div class="card-body">
                                    <div class="chart"><canvas id="chartBar5"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!--col -->
            </div><!--row-->

            <div class="row row-sm mg-b-20">
                <div class="col-lg-4">
                    <div class="card card-dashboard-pageviews">
                        <div class="card-header">
                            <h6 class="card-title">Page Views by Page Title</h6>
                            <p class="card-text">This report is based on 100% of sessions.</p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="az-list-item">
                                <div>
                                    <h6>Bingo Home</h6>
                                    <span>bingo.com</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">7,755</h6>
                                    <span>31.74% (-100.00%)</span>
                                </div>
                            </div><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>Men's Category</h6>
                                    <span>bingo.com/men</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">5,215</h6>
                                    <span>28.53% (-100.00%)</span>
                                </div>
                            </div><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>Women's Category</h6>
                                    <span>bingo.com/women</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">4,848</h6>
                                    <span>25.35% (-100.00%)</span>
                                </div>
                            </div><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>Kid's Category</h6>
                                    <span>bingo.com/kids</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">3,275</h6>
                                    <span>23.17% (-100.00%)</span>
                                </div>
                            </div><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>Football Gadgets</h6>
                                    <span>bingo.com/sports/football</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">3,003</h6>
                                    <span>22.21% (-100.00%)</span>
                                </div>
                            </div><!-- list-group-item -->
                        </div><!-- card-body -->
                    </div><!-- card -->

                </div><!-- col -->
                <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                        <div class="card-header">
                            <h6 class="card-title">Sessions by Channel</h6>
                        </div><!-- card-header -->
                        <div class="card-body row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="chart"><canvas id="chartDonut"></canvas></div>
                            </div><!-- col -->
                            <div class="col-md-6 col-lg-5 mg-lg-l-auto mg-t-20 mg-md-t-0">
                                <div class="az-traffic-detail-item">
                                    <div>
                                        <span>Organic Search</span>
                                        <span>1,320 <span>(25%)</span></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-purple wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><!-- progress -->
                                </div>
                                <div class="az-traffic-detail-item">
                                    <div>
                                        <span>Email</span>
                                        <span>987 <span>(20%)</span></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><!-- progress -->
                                </div>
                                <div class="az-traffic-detail-item">
                                    <div>
                                        <span>Referral</span>
                                        <span>2,010 <span>(30%)</span></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><!-- progress -->
                                </div>
                                <div class="az-traffic-detail-item">
                                    <div>
                                        <span>Social</span>
                                        <span>654 <span>(15%)</span></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-teal wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><!-- progress -->
                                </div>
                                <div class="az-traffic-detail-item">
                                    <div>
                                        <span>Other</span>
                                        <span>400 <span>(10%)</span></span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gray-500 wd-10p" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><!-- progress -->
                                </div>
                            </div><!-- col -->
                        </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-5 col-xl-4">
                    <div class="row row-sm">
                        <div class="col-md-6 col-lg-12 mg-b-20 mg-md-b-0 mg-lg-b-20">
                            <div class="card card-dashboard-five">
                                <div class="card-header">
                                    <h6 class="card-title">Acquisition</h6>
                                    <span class="card-text">Tells you where your visitors originated from, such as search engines, social networks or website referrals.</span>
                                </div><!-- card-header -->
                                <div class="card-body row row-sm">
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="card-chart bg-primary">
                                            <span class="peity-bar" data-peity='{"fill": ["#fff"], "width": 20, "height": 20 }'>6,4,7,5,7</span>
                                        </div>
                                        <div>
                                            <label>Bounce Rate</label>
                                            <h4>33.50%</h4>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="card-chart bg-purple">
                                            <span class="peity-bar" data-peity='{"fill": ["#fff"], "width": 21, "height": 20 }'>7,4,5,7,2</span>
                                        </div>
                                        <div>
                                            <label>Sessions</label>
                                            <h4>9,065</h4>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- card-body -->
                            </div><!-- card-dashboard-five -->
                        </div><!-- col -->
                        <div class="col-md-6 col-lg-12">
                            <div class="card card-dashboard-five">
                                <div class="card-header">
                                    <h6 class="card-title">Sessions</h6>
                                    <span class="card-text"> A session is the period time a user is actively engaged with your website, app, etc.</span>
                                </div><!-- card-header -->
                                <div class="card-body row row-sm">
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                                            <span class="peity-donut" data-peity='{ "fill": ["#007bff", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>4/7</span>
                                        </div>
                                        <div>
                                            <label>% New Sessions</label>
                                            <h4>26.80%</h4>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                                            <span class="peity-donut" data-peity='{ "fill": ["#00cccc", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>2/7</span>
                                        </div>
                                        <div>
                                            <label>Pages/Session</label>
                                            <h4>1,005</h4>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- card-body -->
                            </div><!-- card-dashboard-five -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- col-lg-3 -->
                <div class="col-lg-7 col-xl-8 mg-t-20 mg-lg-t-0">
                    <div class="card card-table-one">
                        <h6 class="card-title">What pages do your users visit</h6>
                        <p class="az-content-text mg-b-20">Part of this date range occurs before the new users metric had been calculated, so the old users metric is displayed.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="wd-5p">&nbsp;</th>
                                    <th class="wd-45p">Cities</th>
                                    <th>Entrances</th>
                                    <th>Bounce Rate</th>
                                    <th>Exits</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><i class="flag-icon flag-icon-us flag-icon-squared"></i></td>
                                    <td><strong>Casa Blanca</strong></td>
                                    <td><strong>134</strong> (1.51%)</td>
                                    <td>33.58%</td>
                                    <td>15.47%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-gb flag-icon-squared"></i></td>
                                    <td><strong>Rabat</strong></td>
                                    <td><strong>290</strong> (3.30%)</td>
                                    <td>9.22%</td>
                                    <td>7.99%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-in flag-icon-squared"></i></td>
                                    <td><strong>Agadir</strong></td>
                                    <td><strong>250</strong> (3.00%)</td>
                                    <td>20.75%</td>
                                    <td>2.40%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-ca flag-icon-squared"></i></td>
                                    <td><strong>Tanger</strong></td>
                                    <td><strong>216</strong> (2.79%)</td>
                                    <td>32.07%</td>
                                    <td>15.09%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-fr flag-icon-squared"></i></td>
                                    <td><strong>Marrakech</strong></td>
                                    <td><strong>216</strong> (2.79%)</td>
                                    <td>32.07%</td>
                                    <td>15.09%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-ph flag-icon-squared"></i></td>
                                    <td><strong>Tata</strong></td>
                                    <td><strong>197</strong> (2.12%)</td>
                                    <td>32.07%</td>
                                    <td>15.09%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div><!-- card -->
                </div><!-- col-lg -->

            </div><!-- row -->

            <!-- your content goes here... -->

        </div><!-- az-content-body -->
        <div class="az-footer">
            <div class="container-fluid">
                <span>&copy; 2019 BingoDev.com</span>
                <span>Designed by: @3aitana</span>
            </div><!-- container -->
        </div><!-- az-footer -->
    </div><!-- az-content -->
@endsection

@section('script')
    <script>
        $(function(){
            'use strict';

            var plot = $.plot('#flotChart', [{
                data: flotSampleData3,
                color: '#007bff',
                lines: {
                    fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
                }
            },{
                data: flotSampleData4,
                color: '#560bd0',
                lines: {
                    fillColor: { colors: [{ opacity: 0 }, { opacity: 0.2 }]}
                }
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 8
                },
                yaxis: {
                    show: true,
                    min: 0,
                    max: 100,
                    ticks: [[0,''],[20,'20K'],[40,'40K'],[60,'60K'],[80,'80K']],
                    tickColor: '#eee'
                },
                xaxis: {
                    show: true,
                    color: '#fff',
                    ticks: [[25,'OCT 21'],[75,'OCT 22'],[100,'OCT 23'],[125,'OCT 24']],
                }
            });

            $.plot('#flotChart1', [{
                data: dashData2,
                color: '#00cccc'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0.2 }, { opacity: 0.2 } ] }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 35
                },
                xaxis: {
                    show: false,
                    max: 50
                }
            });

            $.plot('#flotChart2', [{
                data: dashData2,
                color: '#007bff'
            }], {
                series: {
                    shadowSize: 0,
                    bars: {
                        show: true,
                        lineWidth: 0,
                        fill: 1,
                        barWidth: .5
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: {
                    show: false,
                    min: 0,
                    max: 35
                },
                xaxis: {
                    show: false,
                    max: 20
                }
            });


            //-------------------------------------------------------------//


            // Line chart
            $('.peity-line').peity('line');

            // Bar charts
            $('.peity-bar').peity('bar');

            // Bar charts
            $('.peity-donut').peity('donut');

            var ctx5 = document.getElementById('chartBar5').getContext('2d');
            const chartbar5 = new Chart(ctx5, {
                type: 'bar',
                data: {
                    labels: [0,1,2,3,4,5,6,7],
                    dataset: [{
                        data: [2, 4, 10, 20, 45, 40, 35, 18],
                        backgroundColor: '#560bd0'
                    }, {
                        data: [3, 6, 15, 35, 50, 45, 35, 25],
                        backgroundColor: '#cad0e8'
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        enabled: false
                    },
                    legend: {
                        display: false,
                        labels: {
                            display: false
                        }
                    },
                    scales: {
                        yAxes: [{
                            display: false,
                            ticks: {
                                beginAtZero:true,
                                fontSize: 11,
                                max: 80
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.6,
                            gridLines: {
                                color: 'rgba(0,0,0,0.08)'
                            },
                            ticks: {
                                beginAtZero:true,
                                fontSize: 11,
                                display: false
                            }
                        }]
                    }
                }
            });

            // Donut Chart
            var datapie = {
                labels: ['Search', 'Email', 'Referral', 'Social', 'Other'],
                datasets: [{
                    data: [25,20,30,15,10],
                    backgroundColor: ['#6f42c1', '#007bff','#17a2b8','#00cccc','#adb2bd']
                }]
            };

            var optionpie = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false,
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            };

            // For a doughnut chart
            var ctxpie= document.getElementById('chartDonut');
            var myPieChart6 = new Chart(ctxpie, {
                type: 'doughnut',
                data: datapie,
                options: optionpie
            });

        });

        $(function(){
            'use strict';

            $('.az-sidebar .with-sub').on('click', function(e){
                e.preventDefault();
                $(this).parent().toggleClass('show');
                $(this).parent().siblings().removeClass('show');
            })

            $(document).on('click touchstart', function(e){
                e.stopPropagation();

                // closing of sidebar menu when clicking outside of it
                if(!$(e.target).closest('.az-header-menu-icon').length) {
                    var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                    if(!sidebarTarg) {
                        $('body').removeClass('az-sidebar-show');
                    }
                }
            });


            $('#azSidebarToggle').on('click', function(e){
                e.preventDefault();

                if(window.matchMedia('(min-width: 992px)').matches) {
                    $('.az-sidebar').toggle();
                } else {
                    $('body').toggleClass('az-sidebar-show');
                }
            })


        });
    </script>
@endsection
