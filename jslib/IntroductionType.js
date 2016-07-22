function  TypeName(TitleName){
    console.log(TitleName);
    this.Name=TitleName;
    this.TypeOut();

}

TypeName.prototype.TypeOut = function() {
    var that=this;
    $(function () {
        $(".Typed").typed({
            strings: ["Programmer","Artist","Puzzle Solver"],
            typeSpeed: 100,
            backDelay: 800,
            backSpeed: 50,
            loop: true
        });
    });
};