@extends('layouts.app')
@section('content')
    <div class="az-content az-content-dashboard-two">
        <div class="az-header">
            <div class="container-fluid">
                <div class="az-header-left">
                    <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
                </div>
                <div class="az-header-center">
                    <input type="search" class="form-control" placeholder="Search for anything...">
                    <button class="btn"><i class="fas fa-search"></i></button>
                </div><!-- az-header-center -->
                <div class="az-header-right">
                    <div class="dropdown az-header-notification">
                        <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                        <div class="dropdown-menu">
                            <div class="az-dropdown-header mg-b-20 d-sm-none">
                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                            </div>
                            <h6 class="az-notification-title">Notifications</h6>
                            <p class="az-notification-text">You have 2 unread notification</p>
                            <div class="az-notification-list">
                                <!-- media -->
                                <div class="media">
                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                    <div class="media-body">
                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>
                                        <span>Fri 13 02:56 AM</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                                <div class="media">
                                    <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                    <div class="media-body">
                                        <p><strong>Men's Underwear</strong> is in stock rupture</p>
                                        <span>Fri 13 02:56 AM</span>
                                    </div><!-- media-body -->
                                </div><!-- media -->
                            </div><!-- az-notification-list -->
                        </div><!-- dropdown-menu -->
                    </div><!-- az-header-notification -->
                    <div class="dropdown az-profile-menu">
                        <a href="" class="az-img-user"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /></a>
                        <div class="dropdown-menu">
                            <div class="az-dropdown-header d-sm-none">
                                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                            </div>
                            <div class="az-header-profile">
                                <div class="az-img-user">
                                    <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik00MjEuMDU0LDQxNC44NDNjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjV2NzAuNTE0YzAsMi4yODMtMS44NTgsNC4xNDEtNC4xNDEsNC4xNDFoLTQwLjMxN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTgxLjE4NWwyMy41NDMtMjUuOWMyLjU3Mi0yLjgzLDMuNzg1LTYuODYxLDMuMjQ0LTEwLjc4NyAgICBjLTAuMDEtMC4wNzYtMC4wMjItMC4xNTItMC4wMzUtMC4yMjhMMjc3LjI0LDMyNy42MTdsNi4wNDEtOS4wOTRjMy4zNCwyLjM3Miw1LjkxMyw0LjY1NiwxMC43MzgsNC42NTYgICAgYzQuOTA4LDAsOS40OTctMi43NDcsMTEuNzU1LTcuMjY5di0wLjAwMWwyMy42NS00Ny40bDUzLjg3NiwyMC44NjVjMS45NDksMC44MzYsMzAuMjUyLDEzLjU4MiwzMC4yNTIsNDcuMjM4djUwLjczICAgIGMtMC4wMDEsNC4xNDEsMy4zNTcsNy41LDcuNSw3LjVjNC4xNDIsMCw3LjUtMy4zNTgsNy41LTcuNXYtNTAuNzNjMC00NC4zNDQtMzcuOTY5LTYwLjQ2My0zOS41ODUtNjEuMTI4ICAgIGMtMC4wNDctMC4wMi0wLjA5NS0wLjAzOS0wLjE0My0wLjA1N2wtODkuNjY4LTM0LjcyNnYtMjEuMDNjMTQuMjQyLTExLjA3NiwyNC4xMTctMjcuNDk1LDI2LjU5Ni00Ni4yMjcgICAgYzcuMTAxLTAuNSwxMy42OS0zLjE1MiwxOS4wNzEtNy43NzljNy4wMjctNi4wNDMsMTEuMDU5LTE0LjgzOCwxMS4wNTktMjQuMTI2YzAtNy43MDgtMi43ODEtMTUuMDY4LTcuNzM3LTIwLjgwM1Y5Mi45NTMgICAgQzM0OC4xNDQsNDEuNjk5LDMwNi40NDYsMCwyNTUuMTkyLDBjLTUxLjI1NCwwLTkyLjk1Miw0MS42OTktOTIuOTUyLDkyLjk1M3YyOC41MTFjLTUuMDA5LDUuNjc3LTcuNzMzLDEyLjY2NS03LjczMywyMC4wNzQgICAgYzAsOS4yOTEsNC4wMywxOC4wODUsMTEuMDU5LDI0LjEyOWM1LjM3Nyw0LjYyNSwxMS45NjIsNy4yNzQsMTkuMDYxLDcuNzc1YzIuNDk5LDE5LjA4MywxMi42NjIsMzYuMTE0LDI4LjExNyw0Ny4zMzl2MTkuOTIgICAgbC04OS41NzEsMzQuNzI1Yy0wLjA0NywwLjAxOC0wLjA5NCwwLjAzNy0wLjE0MSwwLjA1NmMtMS42MTcsMC42NjUtMzkuNTg1LDE2Ljc4NC0zOS41ODUsNjEuMTI4djE1Ni4yNDUgICAgYzAsMTAuNTU1LDguNTg3LDE5LjE0MiwxOS4xNDIsMTkuMTQyaDcxLjQ1N2M0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41YzAtNC4xNDItMy4zNTgtNy41LTcuNS03LjVoLTE2LjEzN1YzNDkuMzAxICAgIGMwLTQuMTQyLTMuMzU4LTcuNS03LjUtNy41Yy00LjE0MiwwLTcuNSwzLjM1OC03LjUsNy41djE0Ny42OThoLTQwLjMxOWMtMi4yODMsMC00LjE0MS0xLjg1OC00LjE0MS00LjE0MVYzMzYuNjExICAgIGMwLTMzLjc2OSwyOC40OTMtNDYuNDg2LDMwLjI0My00Ny4yMzRsNTMuODM0LTIwLjg3bDIzLjY1Miw0Ny40MDJjMi4yNjMsNC41MzMsNi44NTgsNy4yNywxMS43NTYsNy4yNyAgICBjNC44MDEsMCw3LjM0OS0yLjI0OSwxMC43MzgtNC42NTZsNi4wNDEsOS4wOTRsLTIyLjQyMSwxMzIuNDY4Yy0wLjAxMywwLjA3NS0wLjAyNCwwLjE1LTAuMDM1LDAuMjI2ICAgIGMtMC41NDIsMy45MjQsMC42NzEsNy45NTcsMy4yNDQsMTAuNzg5bDIzLjU0MywyNS45aC0yOS45OTVjLTQuMTQyLDAtNy41LDMuMzU4LTcuNSw3LjVzMy4zNTgsNy41LDcuNSw3LjVoMjAwLjM2NSAgICBjMTAuNTU1LDAsMTkuMTQyLTguNTg4LDE5LjE0Mi0xOS4xNDJ2LTcwLjUxNEM0MjguNTU0LDQxOC4yMDEsNDI1LjE5Niw0MTQuODQzLDQyMS4wNTQsNDE0Ljg0M3ogTTMxNS4zNzUsMjYzLjA2OWwtMjIuMDQ5LDQ0LjE5ICAgIGMtMC41NDgtMC4zODktMTIuMjMzLTguNjkxLTI2LjUxNy0xOC44MzRjNi4xOTgtNy42NTEtMS4wNTMsMS4yOTksMjcuMjM1LTMzLjYxN0wzMTUuMzc1LDI2My4wNjl6IE0yNzEuMDQzLDMwOS44MzNsLTUuNzE4LDguNjA3ICAgIGgtMTguNzAzbC01LjcxOC04LjYwN2wxNS4wNy0xMC43MDNMMjcxLjA0MywzMDkuODMzeiBNMjI3Ljc0MywyNDMuMTIxdi0xNC4wMzZjOS4xMTIsMy42NzMsMTguODUsNS4zNzYsMjguMzYsNS4zNzYgICAgYzkuODMzLDAsMTkuNDc2LTIuMDk2LDI4LjA1Mi01Ljg0NnYxNC41NjdsLTI4LjE4MSwzNC43ODVMMjI3Ljc0MywyNDMuMTIxeiBNMzQwLjg4MSwxNDEuNTM5ICAgIGMtMC4wMDEsNC45MTMtMi4xMjksOS41NjItNS44MzksMTIuNzUzYy0yLjQ1MywyLjExLTUuNDE2LDMuNDU5LTguNjYxLDMuOTg3di0zMy40NzcgICAgQzMzNS4wMDEsMTI2LjIwMiwzNDAuODgxLDEzMy4zNTIsMzQwLjg4MSwxNDEuNTM5eiBNMTg0LjAwNywxNTguMjc5Yy04LjcxOC0xLjQxNS0xNC41LTguNjIzLTE0LjUtMTYuNzQxICAgIGMwLTguMDE4LDYuNjQ3LTE0LjU0NCwxNC41LTE2LjM1OVYxNTguMjc5eiBNMTg0LjQxLDEwOS44OTZjLTIuMzg5LDAuMjc0LTUuMTI3LDAuOTIxLTcuMTY4LDEuNjE1VjkyLjk1MyAgICBjMC00Mi45ODMsMzQuOTY4LTc3Ljk1Miw3Ny45NTEtNzcuOTUyYzQyLjk4MywwLDc3Ljk1MSwzNC45NjksNzcuOTUxLDc3Ljk1MnYxOC4wNDNjLTIuMTgtMC42NjMtNC40NDEtMS4xMDEtNi43NjItMS4zMDcgICAgYzAtNy4yMzcsMC4wNjMtNS44NDEtMjMuNjEyLTMxLjI5NGMtNC4zNTQtNC42NzgtMTEuNTU2LTUuNjU4LTE3LjAzNy0yLjA3N2MtMjYuMTMsMTcuMDY5LTU4LjAwNSwyNS42NDQtODcuNDE1LDIzLjUzMiAgICBDMTkxLjg2Nyw5OS4zNjcsMTg1Ljk5MSwxMDMuNjE2LDE4NC40MSwxMDkuODk2eiBNMTk5LjAwOCwxNjQuMTg0di00Ni43OTJ2LTIuNDY1YzMyLjM3NSwxLjg5Niw2Ni4zMTgtNy43MjIsOTMuNzM5LTI1LjI4MyAgICBjMTAuODU4LDExLjY1OCwxNi43MzgsMTcuNzczLDE4LjYzNCwyMC4wOTljMCw1Ljg4NCwwLDQ3LjcwNSwwLDU0LjQ0YzAsMzAuNDQ3LTI0LjgyNiw1NS4yNzYtNTUuMjc3LDU1LjI3NiAgICBDMjIxLjkxLDIxOS40NiwxOTkuMDA4LDE5Mi45MzQsMTk5LjAwOCwxNjQuMTg0eiBNMjE4LjYyMywzMDcuMjU5bC0yMi4wNDktNDQuMTlsMjEuMjkzLTguMjQ3bDI3LjI0MSwzMy42MjUgICAgQzIzMS4yNTUsMjk4LjI4NCwyMTkuODgsMzA2LjM2NiwyMTguNjIzLDMwNy4yNTl6IE0yMjcuMjI4LDQ2MS43MDJsMjEuNzA5LTEyOC4yNjNoMTQuMDcxbDIxLjcwOSwxMjguMjYzbC0yOC43NDQsMzEuNjIzICAgIEwyMjcuMjI4LDQ2MS43MDJ6IiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                                </div><!-- az-img-user -->
                                <h6>Hamid Ouballa</h6>
                                <span>Bingo Admin</span>
                            </div><!-- az-header-profile -->


                            <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                            <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                            <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Fellow Admins</a>
                            <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Log Out</a>
                        </div><!-- dropdown-menu -->
                    </div>
                </div><!-- az-header-right -->
            </div><!-- container -->
        </div><!-- az-header -->
        <div class="az-content-header d-block d-md-flex">
            <div>
                <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
                <p class="mg-b-0">Your sales monitoring dashboard.</p>
            </div>
            <div class="az-dashboard-header-right">
                <div>
                    <label class="tx-13">Customer Ratings</label>
                    <div class="az-star">
                        <i class="typcn typcn-star active"></i>
                        <i class="typcn typcn-star active"></i>
                        <i class="typcn typcn-star active"></i>
                        <i class="typcn typcn-star active"></i>
                        <i class="typcn typcn-star"></i>
                        <span>(12,775)</span>
                    </div>
                </div>
                <div>
                    <label class="tx-13">All Sales</label>
                    <h5>431,007</h5>
                </div>
            </div><!-- az-dashboard-header-right -->
        </div><!-- az-content-header -->
        <div class="az-content-body">
            <div class="card card-dashboard-seven">
                <div class="card-header">
                    <div class="row row-sm">
                        <div class="col-6 col-md-4 col-xl">
                            <div class="media">
                                <div><i class="icon ion-ios-calendar"></i></div>
                                <div class="media-body">
                                    <label>Start Date</label>
                                    <div class="date">
                                        <span>Mars 30, 2020</span> <a href=""><i class="icon ion-md-arrow-dropdown"></i></a>
                                    </div>
                                </div>
                            </div><!-- media -->
                        </div>
                        <div class="col-6 col-md-4 col-xl">
                            <div class="media">
                                <div><i class="icon ion-ios-calendar"></i></div>
                                <div class="media-body">
                                    <label>End Date</label>
                                    <div class="date">
                                        <span>Mars 30, 2020</span> <a href=""><i class="icon ion-md-arrow-dropdown"></i></a>
                                    </div>
                                </div>
                            </div><!-- media -->
                        </div>
                        <div class="col-6 col-md-4 col-xl mg-t-15 mg-md-t-0">
                            <div class="media">
                                <div><i class="icon ion-logo-usd"></i></div>
                                <div class="media-body">
                                    <label>Sales Measure</label>
                                    <div class="date">
                                        <span>Revenue</span> <a href=""><i class="icon ion-md-arrow-dropdown"></i></a>
                                    </div>
                                </div>
                            </div><!-- media -->
                        </div>
                        <div class="col-6 col-md-4 col-xl mg-t-15 mg-xl-t-0">
                            <div class="media">
                                <div><i class="icon ion-md-person"></i></div>
                                <div class="media-body">
                                    <label>Customer Type</label>
                                    <div class="date">
                                        <span>All Customers</span> <a href=""><i class="icon ion-md-arrow-dropdown"></i></a>
                                    </div>
                                </div>
                            </div><!-- media -->
                        </div>
                        <div class="col-md-4 col-xl mg-t-15 mg-xl-t-0">
                            <div class="media">
                                <div><i class="icon ion-md-stats"></i></div>
                                <div class="media-body">
                                    <label>Transaction Type</label>
                                    <div class="date">
                                        <span>All Transactions</span> <a href=""><i class="icon ion-md-arrow-dropdown"></i></a>
                                    </div>
                                </div>
                            </div><!-- media -->
                        </div>
                    </div><!-- row -->
                </div><!-- card-header -->
                <div class="card-body">
                    <div class="row row-sm">
                        <div class="col-6 col-lg-3">
                            <label class="az-content-label">Total Quantity</label>
                            <h2>110,000</h2>
                            <div class="desc up">
                                <i class="icon ion-md-stats"></i>
                                <span><strong>2.00%</strong> (30 days)</span>
                            </div>
                            <span id="compositeline2">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                        </div><!-- col -->
                        <div class="col-6 col-lg-3">
                            <label class="az-content-label">Total Cost</label>
                            <h2><span>$</span>523,200</h2>
                            <div class="desc up">
                                <i class="icon ion-md-stats"></i>
                                <span><strong>12.09%</strong> (30 days)</span>
                            </div>
                            <span id="compositeline">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
                        </div><!-- col -->
                        <div class="col-6 col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="az-content-label">Total Revenue</label>
                            <h2><span>$</span>753,098</h2>
                            <div class="desc down">
                                <i class="icon ion-md-stats"></i>
                                <span><strong>0.51%</strong> (30 days)</span>
                            </div>
                            <span id="compositeline4">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
                        </div><!-- col -->
                        <div class="col-6 col-lg-3 mg-t-20 mg-lg-t-0">
                            <label class="az-content-label">Total Profit</label>
                            <h2><span>$</span>331,886</h2>
                            <div class="desc up">
                                <i class="icon ion-md-stats"></i>
                                <span><strong>5.32%</strong> (30 days)</span>
                            </div>
                            <span id="compositeline3">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card-body -->
            </div><!-- card -->

            <div class="row row-sm mg-b-15 mg-sm-b-20">
                <div class="col-lg-7 col-xl-12">
                    <div class="card card-dashboard-six">
                        <div class="card-header">
                            <div>
                                <label class="az-content-label">This Year's Total Revenue</label>
                                <span class="d-block">Sales Performance for this year versus the past year Revenue</span>
                            </div>
                            <div class="chart-legend">
                                <div><span>This year Revenue </span> <span class="bg-indigo"></span></div>
                                <div><span>Past year Revenue </span><span class="bg-teal"></span></div>
                            </div>
                        </div><!-- card-header -->
                        <div id="morrisBar1" class="ht-200 ht-lg-250 wd-100p"></div>
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->

            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-md-6 col-xl-7">
                    <div class="card card-table-two">
                        <h6 class="card-title">Your Most Recent Earnings</h6>
                        <span class="d-block mg-b-20">This is your most recent earnings for today's date.</span>
                        <div class="table-responsive">
                            <table class="table table-striped table-dashboard-two">
                                <thead>
                                <tr>
                                    <th class="wd-lg-25p">Date</th>
                                    <th class="wd-lg-25p tx-right">Sales Count</th>
                                    <th class="wd-lg-25p tx-right">Earnings</th>
                                    <th class="wd-lg-25p tx-right">Tax Witheld</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>05 Oct 2020</td>
                                    <td class="tx-right tx-medium tx-inverse">25</td>
                                    <td class="tx-right tx-medium tx-inverse">$380.50</td>
                                    <td class="tx-right tx-medium tx-danger">-$23.50</td>
                                </tr>
                                <tr>
                                    <td>04 Oct 2020</td>
                                    <td class="tx-right tx-medium tx-inverse">34</td>
                                    <td class="tx-right tx-medium tx-inverse">$503.20</td>
                                    <td class="tx-right tx-medium tx-danger">-$13.45</td>
                                </tr>
                                <tr>
                                    <td>03 Oct 2020</td>
                                    <td class="tx-right tx-medium tx-inverse">30</td>
                                    <td class="tx-right tx-medium tx-inverse">$489.65</td>
                                    <td class="tx-right tx-medium tx-danger">-$20.98</td>
                                </tr>
                                <tr>
                                    <td>02 Oct 2020</td>
                                    <td class="tx-right tx-medium tx-inverse">27</td>
                                    <td class="tx-right tx-medium tx-inverse">$421.80</td>
                                    <td class="tx-right tx-medium tx-danger">-$22.22</td>
                                </tr>
                                <tr>
                                    <td>01 Oct 2020</td>
                                    <td class="tx-right tx-medium tx-inverse">31</td>
                                    <td class="tx-right tx-medium tx-inverse">$518.60</td>
                                    <td class="tx-right tx-medium tx-danger">-$23.01</td>
                                </tr>
                                <tr>
                                    <td>01 Oct 2020</td>
                                    <td class="tx-right tx-medium tx-inverse">31</td>
                                    <td class="tx-right tx-medium tx-inverse">$518.60</td>
                                    <td class="tx-right tx-medium tx-danger">-$23.01</td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div><!-- card-dashboard-five -->
                </div>
                <div class="col-md-6 col-xl-5 mg-t-20 mg-md-t-0">
                    <div class="card card-dashboard-eight">
                        <h6 class="card-title">Your Top Countries</h6>
                        <span class="d-block mg-b-20">Sales performance revenue based by country</span>

                        <div class="list-group">
                            <div class="list-group-item">
                                <p>Casa Blanca</p>
                                <span>$1,671.10</span>
                            </div><!-- list-group-item -->
                            <div class="list-group-item">
                                <p>Fes</p>
                                <span>$1,064.75</span>
                            </div><!-- list-group-item -->
                            <div class="list-group-item">
                                <p>Agadir</p>
                                <span>$1,055.98</span>
                            </div><!-- list-group-item -->
                            <div class="list-group-item">
                                <p>Rabat</p>
                                <span>$1,045.49</span>
                            </div><!-- list-group-item -->
                            <div class="list-group-item">
                                <p>Tanger</p>
                                <span>$1,042.00</span>
                            </div>
                            <div class="list-group-item">
                                <p>Meknes</p>
                                <span>$1,042.00</span>
                            </div><!-- list-group-item -->
                        </div><!-- list-group -->
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
                    $('body').toggleClass('az-sidebar-hide');
                } else {
                    $('body').toggleClass('az-sidebar-show');
                }
            })

            /* ----------------------------------- */
            /* Dashboard content */

            $('#compositeline').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 0,
                chartRangeMax: 10,
                width: '100%',
                height: 20,
                disableTooltips: true
            });


            $('#compositeline2').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 10,
                chartRangeMax: 5,
                width: '100%',
                height: 20,
                disableTooltips: true
            });

            $('#compositeline3').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 0,
                chartRangeMax: 10,
                width: '100%',
                height: 20,
                disableTooltips: true
            });

            $('#compositeline4').sparkline('html', {
                lineColor: '#cecece',
                lineWidth: 2,
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                highlightSpotColor: null,
                highlightLineColor: null,
                fillColor: '#f9f9f9',
                chartRangeMin: 0,
                chartRangeMax: 10,
                width: '100%',
                height: 20,
                disableTooltips: true
            });

            var morrisData = [
                { y: 'Jan 01', a: 95000, b: 70000 },
                { y: 'Feb 01', a: 75000,  b: 55000 },
                { y: 'Mar 01', a: 50000,  b: 40000 },
                { y: 'Apr 01', a: 75000,  b: 65000 },
                { y: 'Mai 01', a: 65500,  b: 40800 },
                { y: 'Jun 01', a: 58500,  b: 40800 },
                { y: 'Jul 01', a: 75500,  b: 40800 },
                { y: 'Aug 01', a: 5500,  b: 40800 },
                { y: 'Sep 01', a: 5500,  b: 40800 },
                { y: 'Oct 01', a: 5500,  b: 40800 },
                { y: 'Nov 01', a: 5500,  b: 40800 },
                { y: 'Dec 01', a: 5500,  b: 40800 }
            ];

            new Morris.Bar({
                element: 'morrisBar1',
                data: morrisData,
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['2020', '2019'],
                barColors: ['#560bd0', '#00cccc'],
                preUnits: '$',
                barSizeRatio: 0.55,
                gridTextSize: 11,
                gridTextColor: '#494c57',
                gridTextWeight: 'bold',
                gridLineColor: '#999',
                gridStrokeWidth: 0.25,
                hideHover: 'auto',
                resize: true,
                padding: 5
            });
        });
    </script>
@endsection
