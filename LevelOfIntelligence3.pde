

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
    {0, 0, 0, 0, 0, 0, 3, 3, 3, 0, 0, 0, 0, 3, 3, 0, 0, 0, 0, 0, 0 },
    {0, 3, 3, 3, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 3, 3, 3, 0 },
    {3, 0, 0, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 0, 0, 0, 3 },
    {3, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 2, 3 },
    {3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3 },
    {3, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 2, 3 },
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
int currentRow;
int[] X=new int[100000];
int[] Y=new int[100000];
int[] D=new int[100000];
int[] T=new int[100000];
int zoom;
Table table;
color[] cols=new color[6];
color[] dudeCol=new color[4];
int c=0;


void setup(){
  currentRow=0;
  zoom =15;
  size(352,352);
  print(currentRow);
  table = new Table("progressV3S.csv", "header");
  //49 maybe?
  int r=0;
  for (TableRow row : table.rows()) {
      X[r]=row.getInt("x");
      Y[r]=row.getInt("y");
      D[r]=row.getInt("d");
      T[r]=row.getInt("t"); //<>//
    r++;
  }
  cols[0]=color(0,0,0);
  cols[1]=color(200,12,12);
  cols[2]=color(0,234,234);
  cols[3]=color(215,215,215);
  dudeCol[0]=color(57,255,20);
  dudeCol[1]=color(160,32,240);
  dudeCol[2]=color(0,196,0);
  dudeCol[3]=color(0,128,0);
  print(currentRow);
}

void draw(){
  frameRate(240);
  if(X[currentRow]==-3){
  currentRow++;
  while(X[currentRow]!=-1){ //-1 is End of B/W

  println(currentRow);
  if(T[currentRow]==2){ //black button
    int ty=Y[currentRow];
    int tx=X[currentRow];
    area[ty][tx]=2;
  }
  if(T[currentRow]==3){ //black button
    int ty=Y[currentRow];
    int tx=X[currentRow];
    area[ty][tx]=1;
  }
  if(T[currentRow]==0){ //WALL
    int ty=Y[currentRow];
    int tx=X[currentRow];
    area[ty][tx]=3;
  }
  currentRow++;
  }
  }
  print("/n");
  for(int j=0;j<21;j++){
  for(int i=0;i<23;i++){

      noStroke();
      fill(cols[area[i][j]]);
      rect(i*zoom,j*zoom,zoom,zoom);

  }
  }
  if(X[currentRow]==-4){
  while(X[currentRow]!=-2){
  if(T[currentRow]>3){ //players
  noStroke();
  fill(dudeCol[T[currentRow]-4]);
      int ty=X[currentRow]*zoom;
      int tx=Y[currentRow]*zoom;
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
  }
  if(T[currentRow]!=-3)
  currentRow++;

}
}
  currentRow++;
  delay(1);
  if(currentRow>61955)
    exit();
}

class Table {
  String[][] data;
  int rowCount;


  Table() {
    data = new String[61955][10];
  }


  Table(String filename) {
    String[] rows = loadStrings(filename);
    data = new String[rows.length][];

    for (int i = 0; i < rows.length; i++) {
      if (trim(rows[i]).length() == 0) {
        continue; // skip empty rows
      }
      if (rows[i].startsWith("#")) {
        continue;  // skip comment lines
      }

      // split the row on the tabs
      String[] pieces = split(rows[i], TAB);
      // copy to the table array
      data[rowCount] = pieces;
      rowCount++;

      // this could be done in one fell swoop via:
      //data[rowCount++] = split(rows[i], TAB);
    }
    // resize the 'data' array as necessary
    data = (String[][]) subset(data, 0, rowCount);
  }


  int getRowCount() {
    return rowCount;
  }


  // find a row by its name, returns -1 if no row found
  int getRowIndex(String name) {
    for (int i = 0; i < rowCount; i++) {
      if (data[i][0].equals(name)) {
        return i;
      }
    }
    println("No row named '" + name + "' was found");
    return -1;
  }


  String getRowName(int row) {
    return getString(row, 0);
  }


  String getString(int rowIndex, int column) {
    return data[rowIndex][column];
  }


  String getString(String rowName, int column) {
    return getString(getRowIndex(rowName), column);
  }


  int getInt(String rowName, int column) {
    return parseInt(getString(rowName, column));
  }


  int getInt(int rowIndex, int column) {
    return parseInt(getString(rowIndex, column));
  }


  float getFloat(String rowName, int column) {
    return parseFloat(getString(rowName, column));
  }


  float getFloat(int rowIndex, int column) {
    return parseFloat(getString(rowIndex, column));
  }


  void setRowName(int row, String what) {
    data[row][0] = what;
  }


  void setString(int rowIndex, int column, String what) {
    data[rowIndex][column] = what;
  }


  void setString(String rowName, int column, String what) {
    int rowIndex = getRowIndex(rowName);
    data[rowIndex][column] = what;
  }


  void setInt(int rowIndex, int column, int what) {
    data[rowIndex][column] = str(what);
  }


  void setInt(String rowName, int column, int what) {
    int rowIndex = getRowIndex(rowName);
    data[rowIndex][column] = str(what);
  }


  void setFloat(int rowIndex, int column, float what) {
    data[rowIndex][column] = str(what);
  }


  void setFloat(String rowName, int column, float what) {
    int rowIndex = getRowIndex(rowName);
    data[rowIndex][column] = str(what);
  }


  // Write this table as a TSV file
  void write(PrintWriter writer) {
    for (int i = 0; i < rowCount; i++) {
      for (int j = 0; j < data[i].length; j++) {
        if (j != 0) {
          writer.print(TAB);
        }
        if (data[i][j] != null) {
          writer.print(data[i][j]);
        }
      }
      writer.println();
    }
    writer.flush();
  }
}