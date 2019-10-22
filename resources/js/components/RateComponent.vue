<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h1>Rate Our Talk</h1>
          </div>

          <div class="card-body">
            <div v-show="!completed">
              <div class="speakers row">
                <div class="speaker">
                  <img src="/img/marten.jpeg">
                </div>
                <div class="speaker last">
                  <img src="/img/neo.jpeg">
                </div>
              </div>
              <div class="title">
                <h1>Laravel - If, how and why you should use it!</h1>
              </div>
              <div class="rate row">
                <div class="first">
                    <i @click="_meh" class="fas fa-thumbs-down" :class="{ grey: rate === 'good' }"></i>
                </div>
                <div class="last">
                    <i @click="_good" class="fas fa-thumbs-up" :class="{ grey: rate === 'meh' }"></i>
                </div>
              </div>
              <div class="form-group comment">
                <textarea class="form-control" rows="3" v-model="comment" placeholder="Leave a Comment (Optional)"></textarea>
              </div>
              <button class="btn btn-primary btn-lg btn-block" :disabled="canSubmit === false" @click="rateTalk">
                Submit Rating
              </button>
            </div>
            <div v-show="completed">
              <h3 style="text-align:center">Thanks for your rating!</h3>
              <img src="/img/moonwalk.gif" style="width: 100%">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="nope" :class="{active: clickedNope}">
      <div class="content">
        <div class="meme">
          <img src="/img/meme.gif">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      rate: "",
      comment: "",
      canSubmit: false,
      completed: false,
      clickedNope: false,
    };
  },
  methods: {
    rateTalk() {
      window.axios
        .post('/rate', {rating: this.rate, comment: this.comment})
        .then(res => {
          if (res.data.status === 'success') {
            this.completed = true
          }
        });
    },
    _meh() {
      this.rate = "meh";
      this.clickedNope = this.canSubmit = true;
      setTimeout(() => (this.clickedNope = false), 6000);
    },
    _good() {
      this.rate = "good";
      this.canSubmit = true;
    }
  }
};
</script>
