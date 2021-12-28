$(".ig").hide();
$(".fb").hide();
$(".tw").hide();
$(".tik").hide();
$(".yt").hide();

$(".igpost_val").hide();
$(".igstory_val").hide();
$(".f_ig_post").hide();
$(".f_ig_story").hide();

$(".fbpost_val").hide();
$(".fbstory_val").hide();
$(".twpost_val").hide();
$(".twstory_val").hide();
$(".tikpost_val").hide();
$(".yt_vid_val").hide();
$(".ytst_val").hide();

$(".instagram").click(function () {
  if ($(this).is(":checked")) {
    $(".ig").show(300);
  } else {
    $(".ig").hide(300);
  }
});
$(".facebook").click(function () {
  if ($(this).is(":checked")) {
    $(".fb").show(300);
  } else {
    $(".fb").hide(300);
  }
});
$(".twitter").click(function () {
  if ($(this).is(":checked")) {
    $(".tw").show(300);
  } else {
    $(".tw").hide(300);
  }
});
$(".tiktok").click(function () {
  if ($(this).is(":checked")) {
    $(".tik").show(300);
  } else {
    $(".tik").hide(300);
  }
});
$(".youtube").click(function () {
  if ($(this).is(":checked")) {
    $(".yt").show(300);
  } else {
    $(".yt").hide(300);
  }
});

// value

$(".ig_post").click(function () {
  if ($(this).is(":checked")) {
    $(".igpost_val").show(300);
  } else {
    $(".igpost_val").hide(300);
  }
});

$(".ig_story").click(function () {
  if ($(this).is(":checked")) {
    $(".igstory_val").show(300);
  } else {
    $(".igstory_val").hide(300);
  }
});

$(".fb_post").click(function () {
  if ($(this).is(":checked")) {
    $(".fbpost_val").show(300);
  } else {
    $(".fbpost_val").hide(300);
  }
});

$(".fb_story").click(function () {
  if ($(this).is(":checked")) {
    $(".fbstory_val").show(300);
  } else {
    $(".fbstory_val").hide(300);
  }
});

$(".tw_post").click(function () {
  if ($(this).is(":checked")) {
    $(".twpost_val").show(300);
  } else {
    $(".twpost_val").hide(300);
  }
});

$(".tw_story").click(function () {
  if ($(this).is(":checked")) {
    $(".twstory_val").show(300);
  } else {
    $(".twstory_val").hide(300);
  }
});

$(".tik_post").click(function () {
  if ($(this).is(":checked")) {
    $(".tikpost_val").show(300);
  } else {
    $(".tikpost_val").hide(300);
  }
});

$(".yt_vid").click(function () {
  if ($(this).is(":checked")) {
    $(".yt_vid_val").show(300);
  } else {
    $(".yt_vid_val").hide(300);
  }
});

$(".yt_stvideo").click(function () {
  if ($(this).is(":checked")) {
    $(".ytst_val").show(300);
  } else {
    $(".ytst_val").hide(300);
  }
});
