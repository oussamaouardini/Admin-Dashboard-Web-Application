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
        <div class="az-content-body az-content-body-dashboard-six">
            <h2 class="az-content-title tx-24 mg-b-5">Hi, welcome back!</h2>
            <p class="mg-b-20">Your finance performance and monitoring dashboard.</p>

            <div class="row row-sm">
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-dashboard-donut">
                        <div class="card-header">
                            <h6 class="card-title mg-b-10">Gross Profit Margin</h6>
                            <p class="mg-b-0 tx-12 tx-gray-500">The profit you make on each dollar of sales... <a href="">Learn more</a></p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="az-donut-chart chart1">
                                <div class="slice one"></div>
                                <div class="slice two"></div>
                                <div class="chart-center">
                                    <span></span>
                                </div>
                            </div>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <div class="col-sm-6 col-lg-3 mg-t-20 mg-sm-t-0">
                    <div class="card card-dashboard-donut">
                        <div class="card-header">
                            <h6 class="card-title mg-b-10">Net Profit Margin</h6>
                            <p class="mg-b-0 tx-12 tx-gray-500">Measures your business at generating prof... <a href="">Learn more</a></p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="az-donut-chart chart2">
                                <div class="slice one"></div>
                                <div class="slice two"></div>
                                <div class="chart-center">
                                    <span></span>
                                </div>
                            </div>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-balance">
                        <div class="card-body">
                            <i class="fab fa-cc-visa"></i>
                            <label class="az-content-label mg-b-0">Your Balance</label>
                            <h1 class="balance-amount"><span>$</span>780,560<small>.00</small></h1>

                            <label class="az-content-label mg-b-2">Your Account Number</label>
                            <div class="account-number">
                                <span><i></i><i></i><i></i><i></i></span>
                                <span><i></i><i></i><i></i><i></i></span>
                                <span><i></i><i></i><i></i><i></i></span>
                                <span>5637</span>
                            </div><!-- account-number -->

                            <div class="d-sm-flex">
                                <div>
                                    <label class="az-content-label">Account Holder</label>
                                    <h5 class="account-name">Mohamed Ouballa</h5>
                                </div>
                                <div class="mg-t-20 mg-sm-t-0 mg-sm-l-50">
                                    <label class="az-content-label">Account Type</label>
                                    <h5 class="account-name">Savings</h5>
                                </div>
                            </div>
                        </div><!-- card-body -->
                        <div class="chart-wrapper">
                            <div id="flotChart2" class="flot-chart"></div>
                        </div><!-- chart-wrapper -->
                    </div><!-- card -->
                </div>
                <div class="col-lg-6 mg-t-20">
                    <div class="card card-dashboard-ratio">
                        <div class="card-body">
                            <div>
                                <div class="card-icon"><i class="typcn typcn-chart-line-outline"></i></div>
                            </div>
                            <div>
                                <h6 class="card-title mg-b-7">Quick Ratio</h6>
                                <h5>0.9:8</h5>
                                <div class="progress ht-5 mg-b-5">
                                    <div class="progress-bar bg-warning wd-90p" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="tx-12 tx-gray-500">Quick Ratio Goal: 1.0 or higher</span>

                                <p class="mg-t-10 mg-b-0">Measures your Current Assets + Accounts Receivable / Current Liabilities</p>
                            </div>
                        </div><!-- card-body -->
                        <div class="card-body">
                            <div>
                                <div class="card-icon"><i class="typcn typcn-chart-area-outline"></i></div>
                            </div>
                            <div>
                                <h6 class="card-title mg-b-7">Current Ratio</h6>
                                <h5>2.8</h5>
                                <div class="progress ht-5 mg-b-5">
                                    <div class="progress-bar bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="tx-12 tx-gray-500">Quick Ratio Goal: 2.0 or higher</span>
                                <p class="mg-t-10 mg-b-0">Measures your Current Assets / Current Liabilities.</p>
                            </div>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                <div class="col-lg-6 mg-t-20">
                    <div class="row row-sm">
                        <div class="col-sm-6">
                            <div class="card card-dashboard-finance">
                                <h6 class="card-title">Total Income</h6>
                                <span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 27, "width": 70 }'>7,5,9,10,1,4,4,7,5,10,4,4</span>
                                <h2><span>$</span>83,320<small>.50</small></h2>
                                <span class="tx-12"><span class="tx-success tx-bold">
                            </div>
                        </div><!-- col -->
                        <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                            <div class="card card-dashboard-finance">
                                <h6 class="card-title">Total Expenses</h6>
                                <span class="peity-bar" data-peity='{ "fill": ["#007bff"], "height": 27, "width": 70 }'>10,4,4,7,5,9,10,3,4,4,7,5</span>
                                <h2><span>$</span>32,370<small>.00</small></h2>
                                <span class="tx-12"><span class="tx-danger tx-bold">
                            </div>
                        </div><!-- col -->
                        <div class="col-sm-6 mg-t-20">
                            <div class="card card-dashboard-finance">
                                <h6 class="card-title">Accounts Receivable</h6>
                                <span class="peity-bar" data-peity='{ "fill": ["#00cccc"], "height": 27, "width": 70 }'>7,5,9,10,5,4,4,7,5,10,4,4</span>
                                <h2><span>$</span>9,112<small>.00</small></h2>
                                <span class="tx-12"><span class="tx-success tx-bold">
                            </div>
                        </div><!-- col -->
                        <div class="col-sm-6 mg-t-20">
                            <div class="card card-dashboard-finance">
                                <h6 class="card-title">Accounts Payable</h6>
                                <span class="peity-bar" data-peity='{ "fill": ["#f10075"], "height": 27, "width": 70 }'>1,4,4,7,5,10,4,7,5,9,10,4</span>
                                <h2><span>$</span>8,216<small>.00</small></h2>
                                <span class="tx-12"><span class="tx-success tx-bold">
                            </div>
                        </div><!-- col -->
                    </div><!-- row -->
                </div>
                <div class="col-12 mg-t-20">
                    <div class="card card-dashboard-table-six">
                        <h6 class="card-title">Financial Management Review</h6>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th colspan="5">Quarter To Date (QTD)</th>
                                    <th colspan="2">Year To Date (YTD)</th>
                                </tr>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Actual</th>
                                    <th>Last Month</th>
                                    <th>Variance</th>
                                    <th>% Variance</th>
                                    <th>Actual</th>
                                    <th>Forecast</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Office &amp; Supplies</td>
                                    <td>232,243</td>
                                    <td>399,768</td>
                                    <td>40,234</td>
                                    <td>5.1%</td>
                                    <td>2,983,098</td>
                                    <td>2,092,243</td>
                                </tr>
                                <tr>
                                    <td>Salaries &amp; Benefits</td>
                                    <td>2,232,877</td>
                                    <td>3,099,565</td>
                                    <td>400,020</td>
                                    <td>6.8%</td>
                                    <td>28,983,091</td>
                                    <td>29,092,765</td>
                                </tr>
                                <tr>
                                    <td>Professional Services</td>
                                    <td>32,435</td>
                                    <td>99,789</td>
                                    <td>20,020</td>
                                    <td>16.9%</td>
                                    <td>183,566</td>
                                    <td>292,897</td>
                                </tr>
                                <tr>
                                    <td>Human Resources</td>
                                    <td>76,877</td>
                                    <td>98,565</td>
                                    <td>123,020</td>
                                    <td>15.0%</td>
                                    <td>101,675</td>
                                    <td>122,232</td>
                                </tr>
                                <tr>
                                    <td>Grand Total</td>
                                    <td>3,433,232</td>
                                    <td>4,768,099</td>
                                    <td>999,400</td>
                                    <td>88.2%</td>
                                    <td>30,643,091</td>
                                    <td>31,644,765</td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
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
            'use strict'

            if($('.az-iconbar .nav-link.active').length) {
                var targ = $('.az-iconbar .nav-link.active').attr('href');
                $(targ).addClass('show');

                if(window.matchMedia('(min-width: 1200px)').matches) {
                    $('.az-iconbar-aside').addClass('show');
                }

                if(window.matchMedia('(min-width: 992px)').matches &&
                    window.matchMedia('(max-width: 1199px)').matches) {
                    $('.az-iconbar .nav-link.active').removeClass('active');
                }
            }

            $('.az-iconbar .nav-link').on('click', function(e){
                e.preventDefault();

                $(this).addClass('active');
                $(this).siblings().removeClass('active');

                $('.az-iconbar-aside').addClass('show');

                var targ = $(this).attr('href');
                $(targ).addClass('show');
                $(targ).siblings().removeClass('show');
            });

            $('.az-iconbar-toggle-menu').on('click', function(e){
                e.preventDefault();

                if(window.matchMedia('(min-width: 992px)').matches) {
                    $('.az-iconbar .nav-link.active').removeClass('active');
                    $('.az-iconbar-aside').removeClass('show');
                } else {
                    $('body').removeClass('az-iconbar-show');
                }
            })

            $('#azIconbarShow').on('click', function(e){
                e.preventDefault();
                $('body').toggleClass('az-iconbar-show');
            });


            $.plot('#flotChart2', [{
                data: flotSampleData1,
                color: '#969dab'
            }], {
                series: {
                    shadowSize: 0,
                    lines: {
                        show: true,
                        lineWidth: 2,
                        fill: true,
                        fillColor: { colors: [ { opacity: 0 }, { opacity: 0.2 } ] }
                    }
                },
                grid: {
                    borderWidth: 0,
                    labelMargin: 0
                },
                yaxis: { show: false },
                xaxis: { show: false }
            });


            // Mini Bar charts
            $('.peity-bar').peity('bar');
        });
    </script>
@endsection
