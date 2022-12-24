<template>
    <header>
        <div class="logo">
            <h3>MyLogo</h3>
        </div>
        <ul class="settings">
             <li><a href="#">Menu</a></li>
             <li><a href="#">Theme</a></li>
        </ul>

        <ul class="profil">
            <li><a href="#">Settings</a></li>
             <li><a href="#">Theme</a></li>
        </ul>

    </header>
    <div class="sidebar" ref="sidebar">

        <ul class="menu">
            <h3>MENU</h3>
            <li><a href="#" @click="toggleMenu($event)">
                <i class="fa-solid fa-gauge"></i> Dashboard</a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="fa-solid fa-chart-simple"></i> Pages</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i> Applications</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i> Applications</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i> Applications</a></li>
                </ul>
            </li>
            <li><a href="#" @click="toggleMenu($event)"><i class="fa-solid fa-chart-simple"></i> Pages</a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="fa-solid fa-chart-simple"></i> Pages</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i> Applications</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i> Applications</a></li>
                </ul></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Applications</a></li>
        </ul>
        <ul class="menu">
            <h3>UI COMPONENTS</h3>
            <li><a href="#"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa-solid fa-chart-simple"></i> Pages</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Applications</a></li>
        </ul>

    </div>
    <div class="main" ref="main">
        <div class="content">
            <slot />
        </div>

    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';

const open = ref(false)
const main = ref(null)
const sidebar = ref(null)
const toggleMenu = (event) => {
   let sub_menu = event.target.parentNode.lastChild;
   sub_menu.classList.toggle('open')
}

onMounted(() => {
    const width = sidebar.value.clientWidth
    main.value.style.marginLeft = width + "px"
});


</script>

<style lang="scss">
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px rgb(255, 255, 255);
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: rgb(226, 226, 226);
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b1b1b1;
}
body{
    background: var(--bg-color);
}
header{
    padding: 10px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background:var(--color-white);
    -webkit-box-shadow: 0px 4px 2px -4px #000000;
    box-shadow: 0px 4px 2px -4px #000000;
    position: sticky;
    z-index: 9;
    top: 0;

    .logo{
        h3{
            font-family: 'Pacifico', sans-serif;
            font-size: 30px;
            font-weight: 500;
        }
    }

    .profil, .settings{
        display: flex;
       li{
            margin-right: 20px;
            list-style: none;
       }
    }

}
.sidebar{
    background: var(--color-white);
    width: 270px;
    height: 100%;
    position: fixed;
    height: 100vh;
    padding-top: 20px;
    left: 0;
    -webkit-box-shadow: 5px -4px 9px -11px rgba(0,0,0,0.97);
    box-shadow: 5px -4px 9px -11px rgba(0,0,0,0.97);
    overflow-x:scroll;

    .menu{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 20px;
        transition: all 100ms;
        h3{
            color: rgb(15, 68, 138);
            margin-left: 20px;
            opacity: 0.8;
            font-size: 1.5rem;
        }
        li{
            list-style: none;
            color: #6d6d6d;
            font-size: 15px;
            width: 100%;
            a{
                padding-left: 40px;
                display: block;
                width: 100%;
                height: 100%;
                padding-top: 14px;
                padding-bottom: 14px;

            }
            i{
                opacity: 0.5;
                margin-right: 10px;
            }

            .sub-menu{
                margin-left: 30px;
                display: none;
                transform-origin: top;
                // background: red;
                z-index: 3;
                animation: collpase 200ms ease-in forwards;
                li{
                    margin-top: 5px;
                    a:hover{
                        background: none;
                    }
                }

            }
            .sub-menu.open{
                display: block;
            }

            @keyframes collpase {
                0%{
                    height:0;
                }

                90%{
                    height: 100px;
                }
                100%{
                    height: auto;
                }
            }

        }
        a:hover{
            background: rgb(40, 182, 207, 0.2);
        }
    }
}

.main{

   .content{
        margin: 20px;
        padding: 20px;

        p{
            text-align: justify;
        }
   }
}

</style>
