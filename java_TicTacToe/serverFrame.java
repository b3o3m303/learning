package finalProject;

import java.util.*;
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

import finalProject.Client;

public class serverFrame extends JFrame {
	private JButton jbtnStart = new JButton("Start");
	private JButton jbtnReplay = new JButton("Replay");
	private JButton jbtnExit = new JButton("Exit");
	private JButton jbtnSend = new JButton("Send");

	// private JTextArea jtaIn1 = new JTextArea();

	protected JButton jbtnPlay[][] = new JButton[3][3];
	private JTextArea jtaIn = new JTextArea();
	private JTextArea jtaOut = new JTextArea();
	private JScrollPane jspIn = new JScrollPane(jtaIn);
	private JScrollPane jspOut = new JScrollPane(jtaOut);

	private JPanel jpnBtm = new JPanel(new BorderLayout(3, 3));
	private JPanel jpnTa = new JPanel(new BorderLayout(3, 3));
	private JPanel funtionPan = new JPanel(new GridLayout(6, 1, 5, 5));
	private JPanel jpnPlay = new JPanel(new GridLayout(3, 3, 5, 5));

	private Container cp;
	private serverend server;
	private Client client;
	private int x = 0;
	private int click = 0;
	public serverFrame() {
		initComp();
	}

	public void initComp() {
		this.setBounds(100, 100, 450, 550);
		this.setResizable(false);
		this.setDefaultCloseOperation(DISPOSE_ON_CLOSE);
		this.setTitle("Server");
		cp = this.getContentPane();
		cp.setLayout(new BorderLayout(5, 5));
		server = new serverend(serverFrame.this);

		// ****-----------\\
		jbtnStart.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent ae) {
				//
				server.start();
				System.out.print(server.getIP());
				jtaIn.append("waiting..." + "\n");
				((JButton) ae.getSource()).setEnabled(false);
			}
		});
		// ***------------***\\
		jbtnExit.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent ae) {
				System.exit(0);
			}
		});
		// ***--------------***\\
		jbtnSend.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent ae) {
				server.sendclient(jtaOut.getText());// client端輸出
				jtaIn.append("Server:" + jtaOut.getText() + "\n");
				jtaOut.setText("");
			}
		});
		// ********------------***\\\
		jbtnReplay.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent ae) {
				
				int result=JOptionPane.showConfirmDialog(null, "對方請求重新開始遊戲", "遊戲是否重新開始", JOptionPane.YES_NO_OPTION);    
		          
		          if (result==JOptionPane.YES_OPTION) {
		          		x=0;
		          		click = 1;
			    		server.sendclient("OK");
		          		for (int i = 0; i < 3; i++) {
		          			for (int j = 0; j < 3; j++) {
		          				jbtnPlay[i][j].setEnabled(true);
		          				jbtnPlay[i][j].setText("");
		          			}
		          		}
		          	
		          }else if(result==JOptionPane.NO_OPTION) {
		        	  
		          }
        
    }
});
		
        // ********------------***\\\
		jtaOut.addKeyListener(new keyEvent());
		// ********------------***\\\
		for (int i = 0; i < 3; i++) {
			for (int j = 0; j < 3; j++) {
				jbtnPlay[i][j] = new JButton("");
				jbtnPlay[i][j].addActionListener(new btnEvent());
			}
		}
		jtaIn.setBackground(new Color(200, 199, 239));
		jtaIn.setFont(new Font(null, Font.PLAIN, 14));
		jtaIn.setEditable(false);
		funtionPan.add(jbtnStart);
		funtionPan.add(jbtnReplay);
		funtionPan.add(jbtnExit);
		jbtnSend.setPreferredSize(new Dimension(72, 120));
		jspIn.setPreferredSize(new Dimension(210, 80));
		jpnTa.add(jspIn, BorderLayout.NORTH);
		jpnTa.add(jspOut, BorderLayout.CENTER);
		for (int i = 0; i < 3; i++) {
			for (int j = 0; j < 3; j++) {
				jpnPlay.add(jbtnPlay[i][j]);
			}
		}
		cp.add(jpnPlay, BorderLayout.CENTER);
		jpnBtm.add(jpnTa, BorderLayout.CENTER);
		jpnBtm.add(jbtnSend, BorderLayout.EAST);
		cp.add(funtionPan, BorderLayout.EAST);
		cp.add(jpnBtm, BorderLayout.SOUTH);

	}

	public void addMsg(String inStr) {
		jtaIn.append("Client:" + inStr + "\n");
		
	}

	public void playing(String str) {
		int i = (int) str.charAt(1)-48;
		int j = (int) str.charAt(3)-48;
		jbtnPlay[i][j].setText("O");
		jbtnPlay[i][j].setEnabled(false);
		check(jbtnPlay[i][j]);
	}

	public void setGround(int a) {
		x = a;
		
	}
	
	class btnEvent implements ActionListener {
		public void actionPerformed(ActionEvent e) {
			JButton btn = (JButton) e.getSource();
			if (btn.getText().equals("") && x == 1) {
			    server.sendclient("輪到你囉");
				btn.setText("X");
				btn.setEnabled(false);
				
				x = 0;/////////////////////////////////////////////////////////////////
				for (int a = 0; a < 3; a++) {
					for (int b = 0; b < 3; b++) {
						if (btn.equals(jbtnPlay[a][b])) {
							server.sendclient("$" + a + "@" + b);
						}
					}
				}
				check(btn);
//				System.out.println(click);
			}

		}
	}

	class keyEvent implements KeyListener {
		public void keyPressed(KeyEvent e) {
			if (e.getKeyCode() == KeyEvent.VK_ENTER) {
				server.sendclient(jtaOut.getText());// client端輸出
				jtaIn.append("Server:" + jtaOut.getText() + "\n");
				jtaOut.setText("");
			}
		}

		public void keyReleased(KeyEvent e) {

		}

		public void keyTyped(KeyEvent e) {
		    jtaOut.setText("");
		}
	}

	public static void main(String[] args) {
		serverFrame sf = new serverFrame();
		sf.setVisible(true);
	}

	// ******************
	  public void check(JButton jb){
		  click++;
	      switch(jb.getText()){
	    case "O":
	     if(jbtnPlay[0][0].getText().equals(jbtnPlay[0][1].getText())  && jbtnPlay[0][1].getText().equals(jbtnPlay[0][2].getText()) && jbtnPlay[0][0].getText().equals("O")){
	      JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[1][0].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[1][2].getText()) && jbtnPlay[1][0].getText().equals("O")){
	            JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[2][0].getText().equals(jbtnPlay[2][1].getText()) && jbtnPlay[2][1].getText().equals(jbtnPlay[2][2].getText()) && jbtnPlay[2][0].getText().equals("O")){
	         JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][0].getText().equals(jbtnPlay[1][0].getText()) && jbtnPlay[1][0].getText().equals(jbtnPlay[2][0].getText()) && jbtnPlay[0][0].getText().equals("O")){
	         JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][1].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[2][1].getText()) && jbtnPlay[0][1].getText().equals("O")){
	            JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][2].getText().equals(jbtnPlay[1][2].getText()) && jbtnPlay[1][2].getText().equals(jbtnPlay[2][2].getText()) && jbtnPlay[0][2].getText().equals("O")){
	            JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][0].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[2][2].getText()) && jbtnPlay[0][0].getText().equals("O")){
	            JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][2].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[2][0].getText()) && jbtnPlay[0][2].getText().equals("O")){
	            JOptionPane.showMessageDialog(this,"O Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else {
	     	   if(click ==9){
	               JOptionPane.showMessageDialog(this,"draw","輸贏", JOptionPane.PLAIN_MESSAGE);

	               }
	           }
	     break;
	     
	    case "X":
	     if(jbtnPlay[0][0].getText().equals(jbtnPlay[0][1].getText())  && jbtnPlay[0][1].getText().equals(jbtnPlay[0][2].getText()) && jbtnPlay[0][0].getText().equals("X")){
	      JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[1][0].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[1][2].getText()) && jbtnPlay[1][0].getText().equals("X")){
	            JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[2][0].getText().equals(jbtnPlay[2][1].getText()) && jbtnPlay[2][1].getText().equals(jbtnPlay[2][2].getText()) && jbtnPlay[2][0].getText().equals("X")){
	         JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][0].getText().equals(jbtnPlay[1][0].getText()) && jbtnPlay[1][0].getText().equals(jbtnPlay[2][0].getText()) && jbtnPlay[0][0].getText().equals("X")){
	         JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);
 
	        }else if(jbtnPlay[0][1].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[2][1].getText()) && jbtnPlay[0][1].getText().equals("X")){
	            JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][2].getText().equals(jbtnPlay[1][2].getText()) && jbtnPlay[1][2].getText().equals(jbtnPlay[2][2].getText()) && jbtnPlay[0][2].getText().equals("X")){
	            JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);
 
	        }else if(jbtnPlay[0][0].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[2][2].getText()) && jbtnPlay[0][0].getText().equals("X")){
	            JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else if(jbtnPlay[0][2].getText().equals(jbtnPlay[1][1].getText()) && jbtnPlay[1][1].getText().equals(jbtnPlay[2][0].getText()) && jbtnPlay[0][2].getText().equals("X")){
	            JOptionPane.showMessageDialog(this,"X Win.","輸贏", JOptionPane.PLAIN_MESSAGE);

	        }else {
	     	   if(click ==9){
	               JOptionPane.showMessageDialog(this,"draw","輸贏", JOptionPane.PLAIN_MESSAGE);
	     
	     	   }
	           }
	     break;
	     
	        }
	     }

	// ******************************

	  
	  public void replay() {
	        	x=0;
	        	click = 1;
	        	for (int i = 0; i < 3; i++) {
	        		for (int j = 0; j < 3; j++) {
	        			jbtnPlay[i][j].setEnabled(true);
	        			jbtnPlay[i][j].setText("");
	        		
	        	}	  
	        }
	    }


}