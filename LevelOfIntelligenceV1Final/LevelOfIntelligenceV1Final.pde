/* @pjs preload="progress.csv"; */
int[][] area2={
    {3,3,3,3,3,3,3,3,3,3,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,0,0,0,0,0,0,0,0,0,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,0,0,0,0,3,0,0,0,0,3},
    {3,3,3,3,3,3,3,3,3,3,3}};
 
int[][] area={
    {0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 3, 3, 3, 0, 0, 0, 3, 3, 3, 0, 0, 0, 0, 0, 0 },
    {0, 3, 3, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 3, 3, 3, 0 },
    {3, 0, 0, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 0, 0, 0, 3 },
    {3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3 },
    {3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3 },
    {3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 3 },
    {3, 0, 0, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 0, 0, 0, 3 },
    {0, 3, 3, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 3, 3, 3, 0 },
    {0, 0, 0, 0, 0, 0, 3, 3, 3, 0, 0, 0, 3, 3, 3, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 }, 
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 },
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 }, 
    {0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0 }, 
    {0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0}};

Table table;
int currentRow=0;
int[] X=new int[1000];
int[] Y=new int[1000];
int[] D=new int[1000];
int zoom =16;
color[] cols=new color[4];
color[] dudeCol=new color[4];
int c=0;

void setup(){
  size(352,352);  
//  table = loadTable("defaultDataFileLeftHand.csv", "header");
//  table = loadTable("defaultDataFileInverse.csv", "header");
  //table = loadTable("/Users/ahintze/Science/CreativityProject/work/inverted/result_03.csv", "header");
  //03 they sort of game the system, one comes back goes out comes back last the rest is irreevant
  //49 the same as above
  table = loadTable("./progress.csv", "header");
  //49 maybe?
  int r=0;
  for (TableRow row : table.rows()) {
      X[r]=row.getInt("x");
      Y[r]=row.getInt("y");
      D[r]=row.getInt("d"); //<>// //<>//
    r++;
  }
  cols[0]=color(0,0,0);
  cols[1]=color(200,12,12);
  cols[2]=color(0,234,234);
  cols[3]=color(215,215,215);
  dudeCol[0]=color(57,255,20);
  dudeCol[1]=color(0,128,0);
  dudeCol[2]=color(0,196,0);
  dudeCol[3]=color(0,255,0);
}

void draw(){
  frameRate(5);
  for(int i=0;i<23;i++){
    for(int j=0;j<21;j++){
      noStroke();
      fill(cols[area[i][j]]);
      rect(i*zoom,j*zoom,zoom,zoom);
    }
  }
  noStroke();
  fill(dudeCol[0]);
      int ty=Y[currentRow]*zoom;
      int tx=X[currentRow]*zoom;
      switch(D[currentRow]){
        case 3:
          triangle(tx+zoom/2,ty,tx+zoom,ty+zoom,tx,ty+zoom);
          break;
        case 0:
          triangle(tx,ty,tx+zoom,ty+zoom/2,tx,ty+zoom);
          break;
        case 1:
          triangle(tx,ty,tx+zoom,ty,tx+zoom/2,ty+zoom);
          break;
        case 2:
          triangle(tx,ty+zoom/2,tx+zoom,ty,tx+zoom,ty+zoom);
          break;
      }
  //saveFrame("pictures/Frame-###.png");
  delay(10);
  currentRow++;
  if(currentRow>799)
    exit();
}