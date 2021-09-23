<template>
  <div class="bg-gray-100 m-4 inline-block relative w-96 h-auto tri-right border rounded-xl btm-right-in">
        <div class="m-4">
            <p>{{ text }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        text: String
    }
}
</script>

<style scoped>
.border{
  border: 8px solid #666;
}

/* Right triangle, left side slightly down */
.tri-right.border.left-in:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -40px;
	right: auto;
  top: 30px;
	bottom: auto;
	border: 20px solid;
	border-color: #666 #666 transparent transparent;
}
.tri-right.left-in:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: -20px;
	right: auto;
  top: 38px;
	bottom: auto;
	border: 12px solid;
	border-color: #f3f4f6 #f3f4f6 transparent transparent;
}

/*Right triangle, placed bottom left side slightly in*/
.tri-right.border.btm-left:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	left: -8px;
  right: auto;
  top: auto;
	bottom: -40px;
	border: 32px solid;
	border-color: transparent transparent transparent #666;
}
.tri-right.btm-left:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
	left: 0px;
  right: auto;
  top: auto;
	bottom: -20px;
	border: 22px solid;
	border-color: transparent transparent transparent #f3f4f6;
}



/*Right triangle, placed bottom right side slightly in*/
.tri-right.border.btm-right-in:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: 30px;
	bottom: -40px;
	border: 20px solid;
	border-color: #666 #666 transparent transparent;
}
.tri-right.btm-right-in:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: 38px;
	bottom: -20px;
	border: 12px solid;
	border-color: #f3f4f6 #f3f4f6 transparent transparent;
}
/*
	left: -8px;
  right: auto;
  top: auto;
	bottom: -40px;
	border: 32px solid;
	border-color: transparent transparent transparent #666;
	left: 0px;
  right: auto;
  top: auto;
	bottom: -20px;
	border: 22px solid;
	border-color: transparent transparent transparent lightyellow;

/*Right triangle, placed bottom right side slightly in*/
.tri-right.border.btm-right:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -8px;
	bottom: -40px;
	border: 20px solid;
	border-color: #666 #666 transparent transparent;
}
.tri-right.btm-right:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: 0px;
	bottom: -20px;
	border: 12px solid;
	border-color: #f3f4f6 #f3f4f6 transparent transparent;
}

/* Right triangle, right side slightly down*/
.tri-right.border.right-in:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -40px;
  top: 30px;
	bottom: auto;
	border: 20px solid;
	border-color: #666 transparent transparent #666;
}
.tri-right.right-in:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -20px;
  top: 38px;
	bottom: auto;
	border: 12px solid;
	border-color: #f3f4f6 transparent transparent #f3f4f6;
}

/* Right triangle placed top right flush. */
.tri-right.border.right-top:before {
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -40px;
  top: -8px;
	bottom: auto;
	border: 32px solid;
	border-color: #666 transparent transparent transparent;
}
.tri-right.right-top:after{
	content: ' ';
	position: absolute;
	width: 0;
	height: 0;
  left: auto;
	right: -20px;
  top: 0px;
	bottom: auto;
	border: 20px solid;
	border-color: #f3f4f6 transparent transparent transparent;
}

</style>