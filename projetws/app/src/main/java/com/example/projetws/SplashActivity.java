package com.example.projetws;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class SplashActivity extends AppCompatActivity {

    private static final int SPLASH_DURATION = 3000; // 3 secondes

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);

        ImageView logo = findViewById(R.id.logoImage);
        Animation animation = AnimationUtils.loadAnimation(this, R.anim.zoom_in);
        logo.startAnimation(animation);

        new Handler().postDelayed(() -> {
            Intent intent = new Intent(SplashActivity.this, AddEtudiant.class); // change MainActivity si besoin
            startActivity(intent);
            finish();
        }, SPLASH_DURATION);
    }
}
